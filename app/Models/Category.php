<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;
    protected $guarded = [];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function promotion()
    {
        return $this->hasMany(Promotion::class);
    }
    public function attributes()
    {
        return $this->belongsToMany(ProductAttribute::class,'attributes_category','attribute_id','category_id');
    }

}
