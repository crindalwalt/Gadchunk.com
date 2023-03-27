<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    // public function product(){
    //     return $this->hasMany(Product::class, 'collection_products');
    // }
    public function products(){
        return $this->belongsToMany(Product::class,'product_collection','collection_id' ,'product_id');
    }
}
