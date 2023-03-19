<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryProductAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['inventory_id'];
 

    public function prod_inven(){
        return $this->belongsToMany(ProductInventory::class , 'inventory_product_attributes');
    }
}
