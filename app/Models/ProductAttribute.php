<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    public function prod_attribute_value(){
        return $this->hasMany(related: ProductAttributeValue::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'attributes_category','category_id','attribute_id');
    }
}
