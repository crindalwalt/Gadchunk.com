<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductInventory;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function dashboard()
    {
        $data['collection'] = Collection::all();
        $data['category'] = Category::all();
        $data['product'] = Product::all();
        $data['product_inventory'] = ProductInventory::all();
        $data['brand'] = Brand::all();
        $data['orders'] = Order::all();
        $data['user'] = User::all();
        return view('admin.dashboard', $data);
    }
    public function account()
    {
        $user = Auth::user();
        //        dd($user);
        return view('template.my-account', [
            'user' => $user
        ]);
    }

    public function profile()
    {
        $data['user'] = Auth::user();
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        // @dd($data);
        return view('admin.User_profile.index', $data);
    }

    public function update(Request $request, User $id)
    {
        // @dd($request);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'new_password' => 'required',
            'old_password' => 'required',
        ]);
        // @dd($request);
        $exist_user =  User::find($id)->first();
        if (Hash::check($request->old_password, $exist_user->password)){
            $id->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'old_password' => $request->old_password,
                'new_password' => Hash::make($request->new_password)
            ]);

            alert("Success", 'Profile has been updated successfully', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Old Password not match', 'error');
            return redirect()->back();
        }
    }
    public function destroy(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        alert('Success', 'Product Deleted Successfully', 'success');
        return redirect()->back();
    }
    public function track_order()
    {
        $data['user'] = Auth::user();
        $data['orders'] = Order::where('user_id', Auth::user()->id)->get();
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        // @dd($data);
        return view('template.track_order', $data);
    }
}
