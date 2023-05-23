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
use Illuminate\Support\Facades\Session;

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
    // public function account()
    // {
    //     $user = Auth::user();
    //     //        dd($user);
    //     return view('template.my-account', [
    //         'user' => $user
    //     ]);
    // }

    public function profile()
    {
        $data['user'] = Auth::user();
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        // @dd($data);
        return view('admin.User_profile.index', $data);
    }

    public function user_profile()
    {
        $data['user'] = Auth::user();
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        $data['orders'] = Order::where('user_id' ,Auth::user()->id)->get();
        $data['cart_items'] = $this->getProducts();

        // @dd($data);
        return view('template.profile', $data);
    }

    public function update_password(Request $request, User $id)
    {
        // @dd($request->all());
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

            alert("Success", 'Password updated successfully', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Old Password not match', 'error');
            return redirect()->back();
        }
    }
    public function update_profile(Request $request, User $id)
    {
        // @dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
            $id->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'zip_code' => $request->zip_code,
                'street' => $request->street,
                'city' => $request->city,
                'province' => $request->province,
                'country' => $request->country,

            ]);

            return redirect()->back()->with('success', 'Profile has been updated successfully');


    }

    // update profile avatar
    public function update_profile_avatar(User $user , Request $request){
        // @dd($request->all());
        $request->validate([
            'avatar' => 'required|image',
        ]);
        // storing image
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
                $filename = 'avatar-' . time() . rand(99, 199) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/avatar_images', $filename);
        } else {
            return redirect()->back()->with('error', 'File Not Image');
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->street = $request->street;
        $user->city = $request->city;
        $user->province = $request->province;
        $user->zip_code = $request->zip_code;
        $user->country = $request->country;
        $user->profile_image = $filename;
        $save = $user->update();
        if ($save) {
            return redirect()->back()->with('success', 'Profile image updated successfully');
        }else {
            return redirect()->back()->with('error', 'Profile Image Not Updated');

        }
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');

    }
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

    public function track_order()
    {
        $data['user'] = Auth::user();
        $data['orders'] = Order::where('user_id', Auth::user()->id)->get();
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        $data['cart_items'] = $this->getProducts();

        // @dd($data);
        return view('template.track_order', $data);
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }
}
