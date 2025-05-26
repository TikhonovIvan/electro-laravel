<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    protected static function booted()
    {
        static::deleting(function ($product) {
            // Удалим связанные записи в БД (если не настроено каскадом)
            $product->images()->delete();
        });
    }
}
