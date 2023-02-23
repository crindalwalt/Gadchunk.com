<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories(){
        return $this->belongsToMany( Category::class, 'product_categories');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function prod_inventory(){
        return $this->belongsTo(ProductInventory::class);
    }

}
