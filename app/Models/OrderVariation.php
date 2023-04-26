<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderVariation extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_detail_id',
        'order_number',
        'product_id',
        'variation_id',
    ];
    function product(){
        return $this->hasMany(Product::class);
    }
    function order(){
        return $this->belongsTo(Order::class);
    }
    function variations(){
        return $this->hasMany(ProductAttributeValue::class,'id','variation_id');
    }
    function order_details(){
        return $this->belongsTo(OrderDetail::class);
    }
}
