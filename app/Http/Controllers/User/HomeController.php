<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function variation(Request $request, Product $id)
    // {
    //     @dd($request->attribute_value);
    //     $oldCart = Session::has("cart") ? Session::get("cart") : [];
    //     $attribute_value = [];
    //     foreach ($oldCart as $item) {
    //         if ($item['product_id'] == $id->id) {
    //             foreach ($request->attribute_value as $value) {
    //                 $attribute_value[] = $value;
    //             }
    //             $item['attribute_value'] = $attribute_value;
    //         }
    //     }

    //     $oldCart[] = $item;
    //     Session::put('cart', $oldCart);
    //     dd($oldCart);

    //     foreach ($oldCart as $item) {
    //         if ($item['product_id'] == $id->id) {
    //             $quantity_value = $item['quantity'];
    //         }
    //     }
    //     foreach ($request->attribute_value as $value) {
    //         $attribute_value[] = $value;
    //     }


    //     return redirect()->back();
    // }
}
