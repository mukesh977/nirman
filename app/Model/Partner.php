<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    protected $fillable = ['title', 'description', 'cover_image', 'order', 'image'];

    public function scopeAsc($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
