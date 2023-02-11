<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductInventory;
use Illuminate\Http\Request;

class ProductInventoryController extends Controller
{
    public function index (){
        $inventories = ProductInventory::all();
        $products = Product::all();
        return view('admin.inventories.index',[
            'inventories' => $inventories,
            'products' => $products,
        ]);
    }
}
