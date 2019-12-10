<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'client_id', 'description', 'featured_image'];

    public function client() {
        return $this->belongsTo('App\Client');
    }
}
