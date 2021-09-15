<?php

namespace App;

use App\Model\Review;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function wishlist()
    {
        return $this->hasMany('App\Model\Wishlist');
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }
}
