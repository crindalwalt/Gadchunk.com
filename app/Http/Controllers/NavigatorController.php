<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class NavigatorController extends Controller
{
    //
    public function  index (){
        // $categories = Category::latest()->get();
        $data['products'] = Product::with('category')->get();
        return view('template.index', $data);
    }
}
