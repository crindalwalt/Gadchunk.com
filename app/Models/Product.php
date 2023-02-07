<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo( Category::class);
    }
    public function variation(){
        return $this->hasMany(ProductVariation::class);
    }
    public function productImage(){
        return $this->hasMany(ProductImage::class);
    }
    public function collection(){
        return $this->belongsToMany(Collection::class, 'collection_products');
    }
}
