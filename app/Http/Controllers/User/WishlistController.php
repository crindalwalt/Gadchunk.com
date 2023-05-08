<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    
      // fetch ids of the products
      public static function getProductIds()
      {
          $cart = Session::has('cart') ? Session::get('cart') : [];
          $ids = [];
          foreach ($cart as $key => $value) {
              $ids[] = $value['product_id'];
          }
          return $ids;
      }

      // fucnciton to get products depending on the ids

      public function getProducts()
      {
          $products = Product::whereIn('id', $this->getProductIds())->get();
          foreach ($products as $pro) {
              foreach (Session::get('cart') as $cart) {
                  if ($pro->id == $cart['product_id']) {
                      $pro->prod_inventory->squantity = $cart['quantity'];
                  }
              }
          }
          return $products;
      }

    // wishlist page
    public function index()
    {
        $data['wishlists'] = Wishlist::where('user_id' , Auth::user()->id)->with('product')->get();
        $data['categories'] = Category::all();
        $data['cart_items'] = $this->getProducts();

        return view('template.wishlist',$data );
    }
     // Add in wishlist
     public function create($id)
     {
         $found = Wishlist::where('user_id', Auth::user()->id)->Where('product_id', $id)->count();
         if ($found == 0) {
             $wishlist = new Wishlist;
             $wishlist->user_id = Auth::user()->id;
             $wishlist->product_id = $id;
            //  dd($wishlist);
             $wishlist->save();
           return 1;
            } else {
                return 0;
            }
     }

     //remove wshlist
     public function remove($id)
    {
        WishList::find($id)->delete();
    }
}
