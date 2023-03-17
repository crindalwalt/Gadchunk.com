




<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryImages extends Model
{
    use HasFactory;
    public function prod_inven(){
        return $this->belongsToMany(ProductInventory::class , 'inventory_images');
    }
}
