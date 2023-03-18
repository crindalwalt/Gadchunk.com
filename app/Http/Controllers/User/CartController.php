<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductInventory;
use Session;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $data['products']= $this->getProducts();
        $data['total'] = $this->Total();
        return view('template.cart', $data);
    }

    // add products in cart
    public function add($id, $quantity = 1)
    {
        // Initialize and check the session exist or not
        $oldCart = Session::has("cart") ? Session::get("cart") : [];
        // loop the cart array 
        foreach ($oldCart as $item) {
            // if id which we get is equal to product id then show error
            if ($item['product_id'] == $id) {
                return response()->json(['error' => 'Already Added to cart', 'count' => sizeof($oldCart)]);
            }
        }

        // store the product id and quantity in session 
        $item['product_id'] = $id;
        $item['quantity'] = $quantity;
        $oldCart[] = $item;
        Session::put('cart', $oldCart);
        return response()->json(['success' => 'Added to cart', 'count' => sizeof($oldCart)]);
    }

    //function for get ids of all products
    public function getItem($id)
    {
        $products = Session::has('cart') ? Session::get('cart') : [];
        foreach ($products as $key => $pro) {
            if ($pro['product_id'] == $id)
                return $key;
        }
    }
    // remove from Cart
      public function remove($id)
      {
          $product = $this->getItem($id);
          $oldCart = Session::has('cart') ? Session::get('cart') : [];
          unset($oldCart[$product]);
          Session::put('cart', $oldCart);
          return response()->json(['success' => 'Product remove from cart', 'count' => sizeof($oldCart)]);
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
        $products = ProductInventory::whereIn('id', $this->getProductIds())->get();
        foreach ($products as $pro) {
            foreach (Session::get('cart') as $cart) {
                if ($pro->id == $cart['product_id']) {
                    $pro->squantity = $cart['quantity'];
                }
            }
            // $newProducts =
        }
        return $products;
    }


    // checkout function 
    public function checkout()
    {

        $data['products'] = $this->getProducts();
        $data['total'] = $this->Total();
        return view('template.checkout', $data);
    }

    // function total price in cart 
    public function Total()
    {
        $products = $this->getProducts();
        $sum = 0;
        foreach ($products as $pro) {
            $sum += $pro->squantity * $pro->retail_price;
        }
        return $sum;
    }

    // fucntion to change quantity in session
    public function changeQuantity($id, $quantity)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : [];
        $newCart = [];
        foreach ($oldCart as $value) {
            if ($value['product_id'] == $id) {
                $value['quantity'] = $quantity;
            }
            $newCart[] = $value;
        }
        Session::put('cart', $newCart);
    }

    // Function to change quantity

    public function ChangeQty($id, $quantity)
    {
        $products = $this->changeQuantity($id, $quantity);
        $total_price = $this->Total();
        return ($quantity > 1000) ? response()->json(['error' => "Maximum order can be placed upto 1000 items"])
            : response()->json(['totalPrice' => $total_price, 'products' => $products ]);
    }

}
