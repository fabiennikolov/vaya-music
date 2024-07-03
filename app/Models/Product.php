<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'image',
        'price',
        'description'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('product');
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}
