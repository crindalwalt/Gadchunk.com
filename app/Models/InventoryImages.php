<?php

namespace App\Models;

use App\Models\Product;
use PhpParser\Node\Expr\PropertyFetch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryImages extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function prod_inven(){
        return $this->belongsTo(ProductInventory::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    
}
