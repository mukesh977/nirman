<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';
    protected $fillable = ['our_core_values', 'our_vision', 'our_mission', 'youtube_video_link', 'years_of_experience', 'happy_members', 'successful_project', 'fund_collected', 'about_us_description', 'first_description', 'second_description', 'cover_image', 'first_featured_image', 'banner_image', 'second_featured_image', 'third_featured_image'];
}
