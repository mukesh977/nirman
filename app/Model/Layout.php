<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Layout extends Model
{
    protected $table = 'layouts';

    protected $fillable = [
        'name',
        'layout_id',
        'status',
        'order'
    ];

    
    // many product belongs to  many layouts.
    public function products()
    {
        return $this->belongsToMany(Product::class, 'layout_product');
    }

    
    // it will give only the first children
    public function one_level_child()
    {
        return $this->hasMany(Layout::class)->orderBy('order');;
    }

    // this will give us all children but not required in this project.
    // public function childrenLayout()
    // {
    //     return $this->hasMany(Layout::class)->with('layouts');
    // }

    // give data in ascending order.
    public function scopeAsc($query)
    {
        return $query->orderBy('order', 'asc');
    }
    
    // give active status data.
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }    
}
