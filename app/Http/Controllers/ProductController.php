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



        // validating the product details
        $request->validate([
            'product_name' => 'required|string',
            'product_brand' => 'required|string',
            'product_price' => 'required|numeric',
            'product_discount_price' => 'required|numeric',
            'product_category' => 'required|string',
            'product_description' => 'required|string',
            'product_stock' => 'required|numeric'
        ]);
        // adding the product to the database table
        $product = new Product();
        $product->name = $request->product_name;
        $product->category_id = $request->product_category;
        $product->description = $request->product_description;
        $product->brand = $request->product_brand;
        $product->orignalPrice = $request->product_price;
        $product->discountPrice = $request->product_discount_price;
        $product->stock = $request->product_stock;
        // database query
        $product->save();
        // sending a success notification on the admin side
        alert("Success", 'Product has been added successfully','success');
        // sending admin back to dashboard
        return redirect()->back();


    }


}
