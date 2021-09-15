<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class ProductTag extends Model
{
    protected $table = 'product_tags';

    protected $fillable = [
        'tag',
        'order'
    ];

    
    
    // many product belongs to many tag.
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_producttag');
    }        
    


    // give data in ascending order.
    public function scopeAsc($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
