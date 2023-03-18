<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\PropertyFetch;

class InventoryImages extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function prod_inven(){
        return $this->belongsTo(ProductInventory::class);
    }
}
