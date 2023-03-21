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
        $data['categories'] = Category::all();
        $data['inventory_products'] = ProductInventory::with('products')->get();
        return view('template.index', $data);
    }

     public function shop(){
        $data['products'] = Product::all();
        $data['category'] = Category::all();
        return view('template.shop', $data);
     }

     public function single_item(){
        return view('template.shop_details');
     }

     public function about(){
        return view('template.blog');
     }

     public function contact(){
        return view('template.contact');
     }
     
     public function error(){
        return view('template.404');
     }

}
