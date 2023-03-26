<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeValue;
use App\Models\ProductInventory;
use App\Models\Wishlist;
use Illuminate\Database\Query\Builder;
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
      $data['wishlists']=Wishlist::all();

      return view('template.index', $data);
   }

   public function shop()
   {
      $data['categories'] = Category::all();
      $data['inventory_products'] = ProductInventory::get();
      $data['attributes'] = ProductAttribute::get();
      $data['categories'] = Category::all();
      $data['collections'] = Collection::all();
      $data['wishlists']=Wishlist::all();

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
$data['wishlists']=Wishlist::all();
      return view('template.blog' ,$data);
   }

   public function contact()
   {
      $data['categories'] = Category::all();
      $data['wishlists']=Wishlist::all();

      return view('template.contact' ,$data);
   }

   public function error()
   {
      return view('template.404');
   }

   // public function filter(Request $request)
   // {

   //    // @dd($request);
   //    $array = null;
   //  //   if (isset($request->array)) {
   //  //      $array = $request->array;
   //  //      foreach($array as $item){
   //  //         $products = ProductAttributeValue::whereIn('attribute_value', $item)->get();

   //  //      }
   //  //   }
   //    return response()->json(['data' => $request->input("result")]);
   // }


   public function searchQuery(Request $request){
   
      $search = $request->input('search');
      if ($search) {
         $data['inventory_products'] = ProductInventory::with('products')->whereHas('products', function ($query) use($search){$query->where('name', 'like', '%'.$search.'%');})->get();
               $data['categories'] = Category::all();
               $data['attributes'] = ProductAttribute::get();
               $data['categories'] = Category::all();
               $data['collections'] = Collection::all();
               $data['wishlists']=Wishlist::all();

      } else {
         $data['categories'] = Category::all();
         $data['inventory_products'] = ProductInventory::get();
         $data['attributes'] = ProductAttribute::get();
         $data['categories'] = Category::all();
         $data['collections'] = Collection::all();   
         $data['wishlists']=Wishlist::all();

      }
      return view('template.shop', $data);
   
      }


}
