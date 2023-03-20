<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductInventory;
use Illuminate\Http\Request;

class NavigatorController extends Controller
{
    //
    public function  index (){
        $data['categories'] = Category::latest()->get();
        $data['inventory_products'] = ProductInventory::with('products')->get();
        return view('template.index', $data);
    }
}
