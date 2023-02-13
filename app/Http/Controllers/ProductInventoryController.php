<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductInventory;
use App\Models\ProductType;
use App\Models\Weight;
use Illuminate\Http\Request;

class ProductInventoryController extends Controller
{
    public function index (){
        $inventories = ProductInventory::all();
        $products = Product::all();
        $weights = Weight::all();
        $brands = Brand::all();
        $types = ProductType::all();
        return view('admin.inventories.index',[
            'inventories' => $inventories,
            'products' => $products,
            'weights' => $weights,
            'brands' => $brands,
            'types' => $types,
        ]);
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'product_id' => 'required|numeric',
            'product_type_id' => 'required|numeric',
            'weight_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'retail_price' => 'required|numeric',
            'store_price' => 'required|numeric',
        ]);

        $inv = new ProductInventory();
        $inv->product_id = $request->product_id;
        $inv->product_type_id = $request->product_type_id;
        $inv->weight_id = $request->weight_id;
        $inv->brand_id = $request->brand_id;
        $inv->retail_price = $request->retail_price;
        $inv->store_price = $request->store_price;
        $inv->in_stock = $request->in_stock;
        $inv->is_active = $request->is_active;
        $inv->save();
        if ($inv->save()) {
            alert("Success", 'Product has been added successfully in Inventory', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Product not be saved', 'error');
        }

    }
}
