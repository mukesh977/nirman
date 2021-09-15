<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\ProductCategory;
use App\Model\Layout;
use App\Model\ProductTag;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'sku',
        'title',
        'slug',
        'regular_price',
        'sale_price',
        'features',
        'description',
        'order',
        'stock',
        'featured_image',
        'product_image',
        'status',
        'product_categories_id'
    ];



    // many product belongs to  one category
    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
    }



    // many product belongs to  many layouts
    public function layouts()
    {
        return $this->belongsToMany(Layout::class, 'layout_product');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }



    // many product belongs to  many tag
    public function tags()
    {
        return $this->belongsToMany(ProductTag::class, 'product_producttag');
    }

    public function scopeAsc($query)
    {
        return $query->orderBy('order', 'asc');
    }



    public function scopeInstock($query)
    {
        return $query->where('stock', '>=', 1);
    }



    public function scopeActive($query)
    {
        return $query->where([
            ['status', 1],
        ]);
    }


    public function wishlist()
    {
        return $this->hasMany('App\Model\Wishlist');
    }
}
