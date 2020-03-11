<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['product_id', 'name', 'description', 'image'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
