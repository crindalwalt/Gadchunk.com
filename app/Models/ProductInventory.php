<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInventory extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    // public function reviews(){
    //     return $this->hasMany(Reviews::class);
    // }
    public function prod_type(){
        return $this->hasMany(ProductType::class);
    }
    public function brand(){
        return $this->hasMany(Brand::class);
    }
    public function weight(){
        return $this->hasMany(Weight::class);
    }
    public function wishlist(){
        return $this->belongsToMany(Wishlist::class);
    }
    public function stock(){
        return $this->hasMany(Stock::class);
    }
    // public function images()
    // {
    //     return $this->hasMany(InventoryImages::class);
    // }
// inventory and product images
    public function inven_prod_images(){
        return $this->hasMany(InventoryImages::class,'inventory_id','product_id');
    }

    public function inven_prod_attributes(){
        return $this->belongsToMany(InventoryProductAttribute::class ,'inventory_product_attributes' , 'inventory_id','attribute_id');
    }
}
