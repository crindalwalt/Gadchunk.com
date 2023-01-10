<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        $Products = Product::all();
        return view('admin.products.index',[
            'products' => $Products,
        ]);
    }

    public function show (Product $product){
        return view('admin.products.show',[
            'product' => $product,
        ]);
    }
    public function add (){
        $data['categories'] = Category::all();
        return view('admin.products.add',[
            'categories' => $data['categories'],
        ]);
    }
    public function store (Request $request){
        dd($request->all());
        return view('admin.products.add');
    }


}
