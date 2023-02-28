<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductAttribute;

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
    public function destroy(Request $request, Product $product)
    {
        $attr_to_del = ProductAttribute::find($request->input("attr_id"));
        $attr_to_del->delete();
        alert("Success", 'Variation has been deleted successfully', 'success');
        return redirect()->back();
    }
}
