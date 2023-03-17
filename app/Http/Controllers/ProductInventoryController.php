<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeValue;
use App\Models\ProductInventory;
use App\Models\ProductType;
use App\Models\Weight;
use Illuminate\Http\Request;

class ProductInventoryController extends Controller
{
    public function index (Product $product){
        $data['inventories'] = ProductInventory::all();
        $data['products'] = Product::all();
        $data['weights'] = Weight::all();
        $data['brands'] = Brand::all();
        $data['types'] = ProductType::all();
        $data['attributes'] = ProductAttribute::get();
        $data['product'] = $product;
        // $data['values'] = ProductAttributeValue::all();
        return view('admin.inventories.index',$data);
    }


    public function store(Request $request)
    {

        //  dd($request->all());
        // $request->validate([
        //     'product_id' => 'required',
        //     // 'product_image' => 'required',
        //     'stock' =>'required',
        //     'retail_price' => 'required',
        //     'store_price' => 'required',
        // ]);

        // $inv = new ProductInventory();
        // $inv->product_id = $request->product_id;
        // $inv->product_type_id = $request->product_type_id;
        // $inv->weight_id = $request->weight_id;
        // $inv->brand_id = $request->brand_id;
        // $inv->retail_price = $request->retail_price;
        // $inv->store_price = $request->store_price;
        // $inv->in_stock = $request->in_stock;
        // $inv->is_active = $request->is_active;
        // $inv->save();


        $inventory = ProductInventory::create([
            'product_id' => $request->input("product_id"),
            'retail_price' => $request->input("retail_price"),
            'discount_price' => $request->input("discount_price"),
            'stock' => $request->input("stock"),
            'in_stock'=> $request->input("in_stock")=="on"?"yes":"no",
        ]);
        $productInventory = ProductInventory::find($inventory->id);
        // dd($inventory->id);
        // foreach ($request->attributes as $key) {
        //     $inventoryAttributes = $productInventory->inven_prod_attributes()->create([
        //         'inventory_id'=> $inventory->id,
        //         'attribute_id' => $key,
        //         'product_id'=> $request->input("product_id"),
        //     ]);

        // dd($request->attribute);
        $productInventory->inven_prod_attributes()->sync($request->attribute);
        // }



        return "sibitishibitibumbumyesyes";
        // if ($inventory) {
        //     alert("Success", 'Product has been added successfully in Inventory', 'success');
        //     return redirect()->back();
        // } else {
        //     alert("Error", 'Product not be saved', 'error');
        // }

    }


}
