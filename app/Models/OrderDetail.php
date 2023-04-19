<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'order_number',
        'product_id',
        'quantity',
    ];
    function product(){
        return $this->hasMany(Product::class,'id','product_id');
    }

    function order(){
        return $this->belongsTo(Order::class);
    }

    function order_variation(){
        return $this->hasMany(OrderVariation::class);
    }


}
