<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Carbon;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
    use HasFactory;
    use LogsActivity;
    use Translatable;

    protected $casts = [
        'additional' => 'collection',
    ];

    protected $fillable = [
        'section_id',
        'additional',
        'thumb',
        'author_id',
        'date',
        'sections',
        'country',
        'active_on_home',
        'status',
    ];

    public $translatedAttributes = [
        'title',
        'slug',
        'keywords',
        'desc',
        'text',
        'locale_additional',
        'active',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function slug($locale)
    {
        $slug = Slug::where('slugable_type', 'App\Models\Post')
            ->where('slugable_id', $this->id)
            ->where('locale', $locale)
            ->first();

        if ($slug !== null) {
            return $slug->slug;
        }

        return null;
    }

    public function scopeFilter($query, $filters = [])
    {
        $query->when(isset($filters['section_id']), function ($q) use ($filters) {
            $q->where('section_id', $filters['section_id']);
        })->when(isset($filters['keyword']), function ($q) use ($filters) {
            $q->whereHas('translations', function ($q) use ($filters) {
                $q->where('title', 'LIKE', "%{$filters['keyword']}%");
            });
        })->when(isset($filters['year']), function ($q) use ($filters) {
            $q->where('year', $filters['year']);
        })->when(isset($filters['start_date']), function ($q) use ($filters) {
            $q->whereDate('created_at', '>=', Carbon::createFromFormat('d/m/Y', $filters['start_date'])->format('y-m-d'));
        })->when(isset($filters['end_date']), function ($q) use ($filters) {
            $q->whereDate('created_at', '<=', Carbon::createFromFormat('d/m/Y', $filters['end_date'])->format('y-m-d'));
        })->when(isset($filters['topics']), function ($q) use ($filters) {
            $q->whereHas('directories', function ($q) use ($filters) {
                $q->whereIn('directory_id', $filters['topics']);
            });
        })
            ->when(isset($filters['type_id']), function ($q) use ($filters) {
                $q->whereHas('section', function ($q) use ($filters) {
                    $q->where('type_id', $filters['type_id']);
                });
            });

        return $query;
    }

    public function slugs()
    {
        return $this->morphMany(Slug::class, 'slugable');
    }

    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function submissions()
    {
        return $this->hasMany(Submission::class, 'post_id', 'id');
    }

    /**
     * Get the user associated with the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Section', 'section_id')->with('translations');
    }

    public function getFullSlug()
    {
        $slug = Slug::where('slugable_type', 'App\Models\Post')->where('slugable_id', $this->id)->where('locale', app()->getlocale())->first();

        if ($slug !== null) {
            return $slug->fullSlug;
        }

        return null;

    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id')->with('translations');
    }

    public function components()
    {
        return $this->belongsToMany(Component::class, 'component_posts')->with('directory');
    }

    public function post_section()
    {
        return $this->belongsTo(Section::class, 'section_id')->first();
    }

    /**
     * Get all of the sections for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sections()
    {
        return $this->hasMany(PostSections::class, 'post_id', 'id');
    }

    /**
     * Get all of the files for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files($type = null)
    {
        if ($type !== null) {
            return $this->hasMany(PostFile::class, 'post_id', 'id')->where('type', $type);
        }

        return $this->hasMany(PostFile::class, 'post_id', 'id');
    }

    public function getAttribute($key)
    {
        if (in_array($key, locales())) {

            return $this->translations->keyBy('locale')->get($key);

        }

        if (isset($this->attributes['additional']) && array_key_exists($key, json_decode($this->attributes['additional'], true))) {

            return json_decode($this->attributes['additional'], true)[$key];
        }

        return parent::getAttribute($key);
    }

    public function componentPost()
    {
        return $this->hasOne(ComponentPost::class, 'post_id', 'id');
    }

    /**
     * Get all of the section's componentables.
     */
    public function componentables(): MorphMany
    {
        return $this->morphMany(Componentable::class, 'componentable');
    }

    public function getTranslatedFullSlugs()
    {
        $slugs = $this->post_section()->getTranslatedFullSlugs();

        $translations = $this->translations;

        foreach ($translations as $key => $value) {
            $slugs[$value->locale] = $slugs[$value->locale].'/'.$value->slug;
        }

        return $slugs;
    }
}
