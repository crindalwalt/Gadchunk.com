<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    use HasFactory;
    public function prod_attribute(){
        return $this->belongsTo(ProductAttribute::class);
    }
    public function prod_type(){
        return $this->belongsToMany(ProductType::class);
    }
}
