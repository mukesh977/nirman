<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = 'advertisements';

    protected $fillable = [
        'title',
        'image',
        'status',
        'order',
    ];


    public function scopeAsc($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
