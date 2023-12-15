<?php

namespace App\Models;

use App\Traits\AuthorTrait;
use Astrotomic\Translatable\Translatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Component extends Model
{
    use AuthorTrait, Translatable;

    protected $fillable = [
        'section_id',
        'user_id',
        'name',
        'type_id',
        'component_data_type',
        'section_data_type',
    ];

    protected $appends = [
        'type_name',
    ];

    public $translatedAttributes = [
        'title',
        'short_title',
    ];

    public function scopeFilter($query, $filters)
    {
        $query->when(isset($filters['keyword']), function ($q) use ($filters) {
            $q->where('name', 'LIKE', "%{$filters['keyword']}%");
        })->when(isset($filters['type']), function ($q) use ($filters) {
            $q->whereIn('type_id', $filters['type']);
        })->when(isset($filters['start_date']), function ($q) use ($filters) {
            $q->where('updated_at', '>=', Carbon::createFromFormat('d/m/Y', $filters['start_date'])->startOfDay());
        })->when(isset($filters['end_date']), function ($q) use ($filters) {
            $q->where('updated_at', '<=', Carbon::createFromFormat('d/m/Y', $filters['end_date'])->endOfDay());
        });

        return $query;
    }

    public function files($type = null)
    {
        return $this->hasMany(ComponentFile::class, 'component_id', 'id');
    }

    public function author(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id')->select('id', 'name', 'email');
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    public function getTypeNameAttribute()
    {
        return $this->type_id ?
            array_keys(getContentType('componentTypes', $this->type_id))[0] :
            '';
    }

    /**
     * Get the user that owns the Component
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * The component belongs to many posts.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'component_posts');
    }

    /**
     * Get all of the componentables for the Component
     */
    public function componentables(): HasMany
    {
        return $this->hasMany(Componentable::class, 'component_id', 'id');
    }

    public function connectionPosts()
    {
        return $this->hasMany(ComponentPost::class, 'component_id', 'id');
    }
}
