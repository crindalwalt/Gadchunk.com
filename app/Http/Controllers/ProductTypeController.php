<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $types = ProductType::all();
        return view('admin.products.product_type', [
            'types' => $types,
        ]);
    }  
    public function store(Request $request)
    {
        // dd($request->all());
        // validating the product details
        $request->validate([
            'name' => 'required|string',
        ]);
        // adding the product to the database table
        $product = new ProductType();

        $product->name = $request->name;
        $productSave = $product->save();

        if($productSave){
             // sending a success notification on the admin side
             alert("Success", 'Product Type has been added successfully', 'success');
             // sending admin back to dashboard
             return redirect()->back();
        }else{
            alert("Error", 'Product Type not be saved', 'error');

        }

    } 
}
