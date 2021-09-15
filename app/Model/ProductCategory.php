<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class ProductCategory extends Model
{
    protected $table = 'product_categories';

    protected $fillable = [
        'name',
        'slug',
        'status',
        'attribute_navbar',
        'seo_title',
        'seo_description',
        'seo_keyword',
        'order'
    ];



    // category has many product
    public function product()
    {
        return $this->hasMany(Product::class, 'product_categories_id');
    }



    // return data in ascending order.
    public function scopeAsc($query)
    {
        return $query->orderBy('order', 'asc');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
