<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Carosel extends Model
{
    protected $table = 'carosels';
    protected $fillable = ['title', 'description','image', 'order'];
}
