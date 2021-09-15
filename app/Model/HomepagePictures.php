<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomepagePictures extends Model
{
    protected $table = 'homepage_images';
    protected $fillable = ['service_image', 'banner_image'];
}
