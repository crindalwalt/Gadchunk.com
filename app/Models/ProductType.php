<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    public function prod_inventory(){
        return $this->belongsTo(ProductInventory::class);
    }
    public function prod_attribute_value(){
        return $this->belongsToMany(ProductAttributeValue::class);
    }
}
