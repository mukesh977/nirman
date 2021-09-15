<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

// this works as a contact us page model.
class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = ['institution_logo', 'cover_photo', 'institution_name', 'institution_email', 'institution_phone_number', 'institution_mobile_number', 'institution_address', 'institution_facebook_link', 'institution_twitter_link', 'institution_instagram_link', 'institution_linkedIn_link', 'institution_youtube_link', 'institution_google_plus_link', 'institution_google_map'];
}
