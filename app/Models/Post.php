<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rayiumir\LaravelMetabox\Traits\HasMetaboxes;

class Post extends Model
{
    use HasFactory, Sluggable, HasMetaboxes;
    protected $fillable = [
        'title',
        'slug',
        'img',
        'content',
        'user_id'
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->metaboxes()->delete();
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
