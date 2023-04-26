<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    // wishlist page
    public function index()
    {
        $data['wishlists'] = Wishlist::where('user_id' , Auth::user()->id)->with('product')->get();
        $data['categories'] = Category::all();

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
