<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentController extends Controller
{
    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripe()

    {

        return view('stripe');
    }



    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function saveorder(Request $request)
    {
        // dd($request->all());
        $input = $request->all();
        $result =Session::put('order_details', $input);
        $dat = Session::get('order_details');
        $amount = $request->total_amount;
        $orderId = "Ord" . rand(0, 10) . time();
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
            "amount" => $amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Purchase Product"
        ]);

        return $this->success($orderId);
    }

    // if stripe is successful then start from success function

    protected function success($inv_num)
    {
        $dat = Session::get('order_details');

      $OrderSave = Order::create([
        'user_id' => Auth::user()->id,
        'checkout_email' => $dat['checkout_email'],
        'checkout_city' =>$dat['checkout_city'],
        'checkout_country' => $dat['checkout_country'],
        'checkout_address' => $dat['checkout_address'],
        'checkout_postcode' => $dat['checkout_postcode'],
        'checkout_phone' => $dat['checkout_phone'],
        'checkout_note' => $dat['checkout_note'],
        'total_amount' => $dat['total_amount'],
        'quantity' => $dat['quantity'],
        'order_number' => $inv_num,
        'payment_method' => $dat['payment_method'],
        'status' => 'pending'
    ]);

    $OrderDetail = OrderDetail::create([
        'order_id' =>  $inv_num,
        'product_id' => $dat['product_id'],
        'quantity' => $dat['quantity'],
        'color' => '',
        'total_amount' => $dat['total_amount'],
    ]);

    // validation to check if saved or not
    if ($OrderSave && $OrderDetail) {
    // Session::flash('success', 'Payment successful!');
    return view('template.thankyou');
    } else {
        alert("Error", 'product could not placed', 'error');
        return redirect()->back();
    }

    }
}
