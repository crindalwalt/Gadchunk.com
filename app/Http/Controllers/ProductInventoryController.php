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
    public function index(Product $product)
    {
        $data['inventories'] = ProductInventory::all();
        $data['products'] = Product::all();
        $data['weights'] = Weight::all();
        $data['brands'] = Brand::all();
        $data['types'] = ProductType::all();
        $data['attributes'] = ProductAttribute::get();
        $data['product'] = $product;
        // $data['values'] = ProductAttributeValue::all();
        return view('admin.inventories.add', $data);
    }
    public function IndexPage()
    {
        $data['inventories'] = ProductInventory::all();
        return view('admin.inventories.index', $data);
    }


    public function store(Request $request)
    {

        //  dd($request->all());
        $request->validate([
            'product_id' => 'required',
            'retail_price' => 'required',
            // 'discount_price' => 'required',
            'stock' => 'required',
            'product_image' => 'required',
        ]);


        $inventory = ProductInventory::create([
            'product_id' => $request->input("product_id"),
            'retail_price' => $request->input("retail_price"),
            'discount_price' => $request->input("discount_price"),
            'stock' => $request->input("stock"),
            'in_stock' => $request->input("in_stock") == "on" ? "yes" : "no",
        ]);


        // $productInventory = ProductInventory::find($inventory->id);
        // foreach ($request->attribute as $key) {
        // $inventoryAttributes = $productInventory->inven_prod_attributes()->create([
        // 'inventory_id'=> $inventory->id,
        // 'attribute_id' => $key,
        //         // 'product_id'=> $request->input("product_id"),
        // ]);
        // dd($productInventory->inven_prod_attributes());

        // }
        // dd('success');
        $inventory->inven_prod_attributes()->sync($request->attribute);
        // storing image
        if ($request->hasFile('product_image')) {
            foreach ($request->file('product_image') as $file) {
                $filename = 'product-inven-' . time() . rand(99, 199) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/inventory_images', $filename);

                $inventoryImages = $inventory->inven_prod_images()->create([
                    'inventory_id' => $inventory->id,
                    'product_image' => $filename,
                    'product_id' => $request->input("product_id"),
                ]);
            }
        } else {
            alert("Error", 'product image could not found', 'warning');
            return redirect()->back();
        }


        // dd('success');
        // $productInventory->inven_prod_attributes()->sync($request->attribute);
        // return "sibitishibitibumbumyesyes";
        if ($inventory) {
            alert("Success", 'Inventory has been added added successfully', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Product not be saved', 'error');
        }
    }

    public function destroy(Request $request)
    {
        $inventory_product = ProductInventory::find($request->id);
        $inventory_product->delete();
        alert('Success', ' Inventory Product Deleted Successfully', 'success');
        return redirect()->back();
    }
}
