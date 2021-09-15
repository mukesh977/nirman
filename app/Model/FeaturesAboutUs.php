<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FeaturesAboutUs extends Model
{
    protected $table = 'features_about_us';
    protected $fillable = ['features_image', 'features_title', 'features_description', 'order'];
    
    public function scopeAsc($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
