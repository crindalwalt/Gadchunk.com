<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartAttribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'attribute_value'
    ];
    public function attribute_values()
    {
        return $this->hasMany(ProductAttributeValue::class ,'id','attribute_value' );
    }
}
