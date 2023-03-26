<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryProductAttribute extends Model
{
    use HasFactory;
    // protected $guarded = [];


    public function prod_inven(){
        return $this->belongsToMany(ProductInventory::class ,'inventory_id','attribute_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
