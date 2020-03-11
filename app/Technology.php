<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = ['name', 'description', 'logo'];

    public function products() {
        return $this->belongsToMany("App\Product");
    }
    
}
