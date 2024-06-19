<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class News extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'category',
        'description',
        'content',
        'image',
        'slug'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('news');
        // ->withResponsiveImages()
    }
}
