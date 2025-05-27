<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'discount',
        'short_description',
        'long_description',
        'color',
        'stock',
        'category_id'
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    protected static function booted(): void
    {
        static::deleting(function ($product) {
            $product->images()->delete(); // ← нормально
        });
    }
}
