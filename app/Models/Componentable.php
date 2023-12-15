<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Componentable extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title',
        'short_title',
    ];

    protected $fillable = [
        'component_id',
        'list',
        'detail',
        'active',
        'sort',
    ];

    /**
     * Get all of the owning commentable models.
     */
    public function componentable()
    {
        return $this->morphTo();
    }

    /**
     * Get the component that owns the Componentable
     */
    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class, 'component_id', 'id');
    }
}
