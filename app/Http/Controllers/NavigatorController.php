<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeValue;
use App\Models\ProductInventory;
use Illuminate\Http\Request;

class NavigatorController extends Controller
{
   //
   public function  index()
   {
      $data['categories'] = Category::all();
      $data['inventory_products'] = ProductInventory::with('products')->get();
      $data['collections'] = Collection::all();
      $data['categories'] = Category::all();

      return view('template.index', $data);
   }

   public function shop()
   {
      $data['categories'] = Category::all();
      $data['inventory_products'] = ProductInventory::with('products', 'inven_prod_images')->get();
      $data['attributes'] = ProductAttribute::with('prod_attribute_value')->get();
      $data['categories'] = Category::all();
      $data['collections'] = Collection::all();

      return view('template.shop', $data);
   }

   public function single_item(Product $id)
   {
    //   $data['product'] = $id;
    //   $data['categories'] = Category::all();

      // @dd($data['products']);
      return view('template.shop_details', [
        'categories' => Category::all(),
        'product' => $id,
      ]);
   }

   public function about()
   {
      $data['categories'] = Category::all();

      return view('template.blog');
   }

   public function contact()
   {
      $data['categories'] = Category::all();

      return view('template.contact');
   }

   public function error()
   {
      return view('template.404');
   }

   public function filter(Request $request)
   {

      // @dd($request);
      $array = null;
    //   if (isset($request->array)) {
    //      $array = $request->array;
    //      foreach($array as $item){
    //         $products = ProductAttributeValue::whereIn('attribute_value', $item)->get();

    //      }
    //   }
      return response()->json(['data' => $request->input("result")]);
   }


   public function searchQuery(){

   }
}
