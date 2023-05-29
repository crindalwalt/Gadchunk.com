<?php

namespace App\Models;


use App\Models\Category;
use App\Models\Wishlist;
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
    public function sub_category(){
        return $this->belongsTo(SubCategory::class, 'category_id');
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
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function reviews(){
        return $this->hasMany(Reviews::class );
    }

    public function attributes()
    {
        return $this->hasMany(InventoryProductAttribute::class);
    }

    public function cart_attribute_values()
    {
        return $this->belongsToMany(ProductAttributeValue::class);
    }
    public function order_detail()
    {
        return $this->belongsTo(OrderDetail::class,'product_id','id');
    }
    public function order_variation()
    {
        return $this->belongsTo(OrderVariation::class);
    }

}
