<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function promotion()
    {
        return $this->hasMany(Promotion::class);
    }
    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }
}
