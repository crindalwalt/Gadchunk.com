<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view('template.shop',[
            'categories' => Category::all(),
            'products' => Product::all()
        ]);
    }
}
