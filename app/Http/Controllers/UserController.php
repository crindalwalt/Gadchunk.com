<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function account (){
        $user = Auth::user();
//        dd($user);
        return view('template.my-account',[
            'user' => $user
        ]);
    }

    public function profile(){
        $data['user']= Auth::user();
        $data['categories']= Category::all();
        $data['wishlists'] = Wishlist::all();
         // @dd($data);
        return view('template.profile', $data);
    }

    public function track_order(){
        $data['user']= Auth::user();
        $data['categories']= Category::all();
        // @dd($data);
        return view('template.track_order', $data);
    }
}
