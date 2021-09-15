<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiries';
    protected $fillable = ['name', 'email', 'phone', 'message'];
}
