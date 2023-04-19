<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function prod_attribute(){
        return $this->belongsTo(ProductAttribute::class);
    }
    public function prod_type(){
        return $this->belongsToMany(ProductType::class);
    }
    public function cart_variation(){
        return $this->belongsTo(CartVariation::class);
    }
    public function cart_product_values()
    {
        return $this->belongsTo(Product::class);
    }
    public function cart_attribute_values()
    {
        return $this->belongsTo(CartAttribute::class,'attribute_value', 'id');
    }
    public function order_variation()
    {
        return $this->belongsTo(OrderVariation::class , 'variation_id' , 'id');
    }
}
