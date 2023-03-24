<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        Session::put('order_details', $input);
        $amount = $request->amount;
        $orderId = "Ord" . rand(0, 10) . time();
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
            "amount" => $amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Purchase Product"
        ]);

        // return $this->success($orderId);
        if ($this->success($orderId)) {
            return "order ho gya jy pai";
        } else {
            return "order nai hoya jy pai";
        }
    }

    // if stripe is successful then start from success function

    protected function success($inv_num = "")
    {
        // dd('order successfully');
        return "order ho gya jy pai";

    }
}
