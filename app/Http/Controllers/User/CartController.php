<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
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
}
