<?php

namespace App\Http\Controllers;

use App\Models\ProductAttribute;
use Illuminate\Http\Request;

 class ProductAttributeController extends Controller
{
       public function index()
    {
        $variations = ProductAttribute::all();
        // $categories = Category::all();

        return view('admin.products.product_variation', [
            'variations' => $variations,
            // 'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'attribute_name' => 'required|string',
            'attribute_description' => 'required|string',
        ]);

        $variation = new ProductAttribute();
        $variation->attribute_name = $request->attribute_name;
        $variation->attribute_description = $request->attribute_description;
        $variation->save();
        if ($variation->save()) {
            alert("Success", 'Variation has been added successfully', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Product not be saved', 'error');
        }

    }
}
