<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Messages;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeValue;
use App\Models\ProductInventory;
use App\Models\Reviews;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NavigatorController extends Controller
{
    //

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

    public function  index()
    {
        $data['categories'] = Category::all();
        $data['sub_categories'] = SubCategory::all();
        $data['top_categories'] = Category::orderBy('created_at','desc')->take(5)->get();
        $data['collections'] = Collection::all();
        $data['products'] = Product::latest()->get();
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        $data['orders'] = Order::all();
        $data['cart_items'] = $this->getProducts();
        return view('template.index', $data);
    }

    public function shop()
    {
        $data['categories'] = Category::all();
        $data['inventory_products'] = Product::get();
        $data['attributes'] = ProductAttribute::get();
        $data['categories'] = Category::all();
        $data['collections'] = Collection::all();
        $data['wishlists'] = Wishlist::all();
        $data['orders'] = Order::all();
        $data['cart_items'] = $this->getProducts();
        return view('template.shop', $data);
    }

    public function single_item(Product $id)
    {
        $data['product'] = $id;
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        $data['inventory_products'] = ProductInventory::with('products')->get();
        $data['orders'] = Order::all();
        $data['cart_items'] = $this->getProducts();

        //   $data['reviews'] = Reviews::all();
        //   @dd(  $data['reviews']);
        return view('template.shop_details', $data);
    }

    public function about()
    {
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        $data['orders'] = Order::all();
        $data['cart_items'] = $this->getProducts();

        return view('template.blog', $data);
    }

    public function contact()
    {
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        $data['orders'] = Order::all();
        $data['cart_items'] = $this->getProducts();

        return view('template.contact', $data);
    }
    public function message(Request $request)
    {
        // @dd($request->all());
        $request->validate([
            "name" => ["required", "string"],
            "email" => ['required'],
            "subject" => ["required"],
            "message" => ["required"]
        ]);

        $MessageSave = Messages::create([
            'user_id' => $request->input("user_id"),
            'name' => $request->input("name"),
            'email' => $request->input("email"),
            'subject' => $request->input("subject"),
            'message' => $request->input("message")
        ]);
                // @dd($request->all());

         // validation to check if saved or not
         if ($MessageSave) {
            alert("Success", 'Product sent successfully', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Message could not sent', 'error');
            return redirect()->back();
        }
    }

    public function MessageShow(){
        $data['messages'] = Messages::all();
        return view('admin.messages.index',$data);
    }


    public function error()
    {
        $data['cart_items'] = $this->getProducts();
        return view('template.404')->with($data);
    }

    public function filter(Request $request)
    {

       if (isset($request->result)) {
          $value = $request->result;
             $data['inventory_products']  = Product::where('category_id', $value)->get();
          return view('template.component.filtered_products')->with($data);
        }else{
            $inventory_products = Product::get();
            return view('template.component.filtered_products')->with('inventory_products', $inventory_products);
        }
    }


    public function searchQuery(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $data['inventory_products'] = Product::with('prod_inventory')->whereHas('prod_inventory', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->get();
            $data['categories'] = Category::all();
            $data['attributes'] = ProductAttribute::get();
            $data['categories'] = Category::all();
            $data['collections'] = Collection::all();
            $data['wishlists'] = Wishlist::all();
            $data['orders'] = Order::all();
            $data['cart_items'] = $this->getProducts();

        }else {
            $data['categories'] = Category::all();
            $data['inventory_products'] = ProductInventory::get();
            $data['attributes'] = ProductAttribute::get();
            $data['categories'] = Category::all();
            $data['collections'] = Collection::all();
            $data['wishlists'] = Wishlist::all();
            $data['orders'] = Order::all();
            $data['cart_items'] = $this->getProducts();

        }
        return view('template.shop', $data);
    }
}
