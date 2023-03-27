<?php

namespace App\Models;


use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function categories(){
    //     return $this->belongsToMany( Category::class, 'product_categories');
    // }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function collections(){
        return $this->belongsToMany(Collection::class , 'product_collection' ,'product_id','collection_id');
    }
    public function prod_inventory(){
        return $this->hasOne(ProductInventory::class);
    }
    public function images()
    {
        return $this->hasMany(InventoryImages::class);
    }


    public function attributes()
    {
        return $this->hasMany(InventoryProductAttribute::class);
    }

}
