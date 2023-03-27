<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'order_id',
        'quantity',
        'total_amount'
    ];
    function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

    function order(){
        return $this->belongsTo(Order::class,'order_id','order_number');
    }
}
