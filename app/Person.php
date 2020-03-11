<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['first_name', 'middle_name', 'surname', 'position', 'email', 'phone', 'facebook', 'twitter', 'linkedin', 'avatar', 'description'];
}
