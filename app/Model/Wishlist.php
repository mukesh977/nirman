<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlists';


    protected $fillable = [
        'user_id',
        'product_id',
    ]; 
    
    
    public function product()
    {
        return $this->belongsTo('App\Model\Product');
    }
}
