<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartAttribute;
use App\Models\CartVariation;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\ProductInventory;
use App\Models\Wishlist;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $data['products'] = $this->getProducts();
        $data['total'] = $this->Total();
        $data['sub_total'] = $this->Sub_Total();
        $data['discount'] = $this->Discount();
        $data['categories'] = Category::all();
        $data['wishlists'] = Wishlist::all();
        $data['collections'] = Collection::all();
        $data['cart_attributes'] = CartAttribute::all();

        return view('template.cart', $data);
    }

    // Session check
    public function SessionCheck()
    {
        $result = Session::get("cart");
        dd($result);
    }
    // variation change
    public function variation(Request $request, Product $id)
    {
        // @dd($request->attribute_value);
        $oldCart = Session::has("cart") ? Session::get("cart") : [];
        $attribute_value = [];
        foreach ($oldCart as $item) {
            if ($item['product_id'] == $id->id) {
                $quantity_value = $item['quantity'];
                $cart = CartVariation::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $id->id,
                    'quantity' =>  $quantity_value,
                ]);
                foreach ($request->attribute_value as $value) {
                    $cart = CartAttribute::create([
                        'product_id' => $id->id,
                        'attribute_value' =>  $value,
                    ]);
                    // $attribute_value[] = $value;
                }
            }
        }

        // dd( $attribute_value );
        return redirect()->back();
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
        CartVariation::where('product_id', $id)->delete();
        CartAttribute::where('product_id', $id)->delete();
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

    // buy now function
    public function buy($id , $quantity = 1){
           // Initialize and check the session exist or not
           $oldCart = Session::has("cart") ? Session::get("cart") : [];
           // loop the cart array
        //    foreach ($oldCart as $item) {
        //        // if id which we get is equal to product id then show error
        //        if ($item['product_id'] == $id) {
        //            return response()->json(['error' => 'Already Added to cart', 'count' => sizeof($oldCart)]);
        //        }
        //    }

           // store the product id and quantity in session
           $item['product_id'] = $id;
           $item['quantity'] = $quantity;
           $oldCart[] = $item;
           Session::put('cart', $oldCart);
           $cart = Session::has('cart') ? Session::get('cart') : [];
           $ids = [];
           foreach ($cart as $key => $value) {
               $ids[] = $value['product_id'];
           }
           $products = Product::whereIn('id', $ids)->get();
           foreach ($products as $pro) {
               foreach (Session::get('cart') as $cart) {
                   if ($pro->id == $cart['product_id']) {
                       $pro->prod_inventory->squantity = $cart['quantity'];
                   }
               }
           }

           // total
           $prod = $products;
           $sum = 0;
           foreach ($prod as $pro) {
               // $sum += $pro->squantity * $pro->retail_price;
               $trim_value = trim($pro->prod_inventory->discount_price, '%');
               if ($trim_value == '0' || $trim_value == NULL) {
                   $sum += $pro->prod_inventory->squantity * $pro->prod_inventory->retail_price;
               } else {
                   $discount_formula = ($trim_value / 100) * $pro->prod_inventory->retail_price;
                   $simple_value = $pro->prod_inventory->squantity * $pro->prod_inventory->retail_price;
                   $discount_value = $pro->prod_inventory->squantity * $discount_formula;
                   $sum += $simple_value - $discount_value;
               }
           }

           // sub total
           $sub_products = $products;
           $sub_total = 0;
           foreach ($sub_products as $pro) {
               $sub_total += $pro->prod_inventory->squantity * $pro->prod_inventory->retail_price;
           }

         // Discount

        $discount = $sum - $sub_total;

        $data['products'] =   $products;
        $data['cart_items'] = $products;
        $data['total'] = $sum;
        $data['sub_total'] = $sub_total;
        $data['discount'] = $discount;
        $data['wishlists'] = Wishlist::all();
        $data['collections'] = Collection::all();
        $data['cart_attributes'] = CartAttribute::all();
        $data['categories'] = Category::all();

        return view('template.checkout', $data);

    }

    // checkout function
    public function checkout()
    {
        $data['products'] = $this->getProducts();
        $data['total'] = $this->Total();
        $data['sub_total'] = $this->Sub_Total();
        $data['discount'] = $this->Discount();
        $data['wishlists'] = Wishlist::all();
        $data['collections'] = Collection::all();
        $data['cart_attributes'] = CartAttribute::all();
        $data['categories'] = Category::all();
        $data['cart_items'] = $this->getProducts();

        return view('template.checkout', $data);
    }

    // function total price in cart
    //   public function itemTotal($id,$quantity)
    //   {
    //     $products = ProductInventory::where('id', $id)->get();
    //     $Cart = Session::get('cart');
    //     @dd($products);
    //     foreach ($Cart as $value) {
    //         if ($value['product_id'] == $id) {
    //             $value['quantity'] = $quantity;
    //         }
    //         break;
    //     }
    //     foreach($products as item){}
    //           $result= $value['quantity'] * $products['discount_price'];
    //           @dd($result);
    //       return $result;
    //   }

    // function total price in cart
    public function Total()
    {
        $products = $this->getProducts();
        $sum = 0;
        foreach ($products as $pro) {
            // $sum += $pro->squantity * $pro->retail_price;
            $trim_value = trim($pro->prod_inventory->discount_price, '%');
            if ($trim_value == '0' || $trim_value == NULL) {
                $sum += $pro->prod_inventory->squantity * $pro->prod_inventory->retail_price;
            } else {
                $discount_formula = ($trim_value / 100) * $pro->prod_inventory->retail_price;
                $simple_value = $pro->prod_inventory->squantity * $pro->prod_inventory->retail_price;
                $discount_value = $pro->prod_inventory->squantity * $discount_formula;
                $sum += $simple_value - $discount_value;
                // $sum += $pro->squantity * $discount_formula;
            }
        }
        return $sum;
    }
    // function single item price in cart
    public function SingleTotal($id, $quantity)
    {
        $product = Product::with('prod_inventory')->find($id);
        $trim_value = trim($product->prod_inventory->discount_price, '%');
        if ($trim_value == '0%' || $trim_value == '0' || $trim_value == NULL) {
            $single_item_total = $quantity * $product->prod_inventory->retail_price;
        } else {
            $discount_formula = ($trim_value / 100) * $product->prod_inventory->retail_price;
            $simple_value = $quantity * $product->prod_inventory->retail_price;
            $discount_value = $quantity * $discount_formula;
            $single_item_total = $simple_value - $discount_value;
        }

        return $single_item_total;
    }

    // function discount price in cart
    public function Discount()
    {
        $total = $this->Total();
        $sub_total = $this->Sub_Total();
        $discount = $total - $sub_total;
        return $discount;
    }

    //subtotal function
    public function Sub_Total()
    {
        $products = $this->getProducts();
        $sum = 0;
        foreach ($products as $pro) {
            $sum += $pro->prod_inventory->squantity * $pro->prod_inventory->retail_price;
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
    // fucntion to change quantity in session
    public function ChangeVariation($id, $quantity)
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
        $single_total = $this->SingleTotal($id, $quantity);
        $sub_total = $this->Sub_Total();
        $discount = $this->Discount();
        $total_price = $this->Total();
        return ($quantity > 1000) ? response()->json(['error' => "Maximum order can be placed upto 100 items"])
            : response()->json(['id' => $id, 'totalPrice' => $total_price, 'single_total' => $single_total, 'products' => $products, 'sub_total' => $sub_total, 'discount' => $discount]);
    }


    // function of ThankYou Page
    public function thankyou()
    {
        $data['wishlists'] = Wishlist::all();
        $data['categories'] = Category::all();
        $data['cart_items'] = $this->getProducts();
        return view('template.thankyou',$data);
    }
}
