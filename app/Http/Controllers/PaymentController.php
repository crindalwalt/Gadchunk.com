<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\CartAttribute;
use App\Models\CartVariation;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderVariation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

    public function check()
    {
        Session::get('order_details');
    }
    public function saveorder(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'user_id' => 'required',
            'checkout_email' => 'required|email',
            'checkout_city' => 'required|string',
            'checkout_country' => 'required|string',
            'checkout_address' => 'required',
            'checkout_phone' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'total_amount' => 'required',
            'payment_method' => 'required'
        ]);
        $input = $request->all();
        // dd($input);
        $result = Session::put('order_details', $input);
        $dat = Session::get('order_details');
        $amount = $request->total_amount;
        $orderId = "Ord" . rand(0, 10) . time();
        if ($request->payment_method == 'stripe') {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            Charge::create([
                "amount" => $amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Purchase Product"
            ]);

            return $this->success($orderId);
        } else {
            return $this->success($orderId);
        }
    }

    // function to send email
    // public function sendmail()
    // {
    //     $mailData = [
    //         'title' => 'Mail from ItSolutionStuff.com',
    //         'body' => 'This is for testing email using smtp.'
    //     ];

    //     Mail::to('a1279asad@gmail.com')->send(new OrderMail($mailData));

    //     dd("Email is sent successfully.");
    // }
    // if stripe is successful then start from success function

    protected function success($inv_num)
    {
        $dat = Session::get('order_details');
        //    dd($dat['product_id'][0]);
        // =============================================================
        $OrderSave = Order::create([
            'user_id' => Auth::user()->id,
            'checkout_email' => $dat['checkout_email'],
            'checkout_city' => $dat['checkout_city'],
            'checkout_country' => $dat['checkout_country'],
            'checkout_address' => $dat['checkout_address'],
            'checkout_postcode' => $dat['checkout_postcode'],
            'checkout_phone' => $dat['checkout_phone'],
            'checkout_note' => $dat['checkout_note'],
            'total_amount' => $dat['total_amount'],
            'order_number' => $inv_num,
            'payment_method' => $dat['payment_method'],
            'status' => 'pending'
        ]);

        foreach ($dat['product_id'] as $product) {
            $products = CartVariation::where('product_id', $product)->get();
            if (!$products) {
                foreach ($products as  $product) {
                    $OrderDetail = OrderDetail::create([
                        'order_id' =>  $OrderSave->id,
                        'order_number' =>  $inv_num,
                        'product_id' => $product->product_id,
                        'quantity' => $product->quantity
                    ]);
                    $attributes = CartAttribute::where('product_id', $product->product_id)->get();
                    foreach ($attributes as $key) {
                        foreach ($key->attribute_values as $attribute) {
                            $OrderAttribute = OrderVariation::create([
                                'order_detail_id' =>  $OrderDetail->id,
                                'order_number' =>  $inv_num,
                                'product_id' =>  $product->product_id,
                                'variation_id' =>  $attribute->id,
                            ]);
                        }
                    }
                }
                // validation to check if saved or not
                if ($OrderSave && $OrderDetail && $OrderAttribute) {
                    // Session::flash('success', 'Payment successful!');
                    //    $this->sendemail($OrderSave);
                    return view('template.thankyou');
                } else {
                    alert("Error", 'product could not placed', 'error');
                    return redirect()->back();
                }
            } else {
                $OrderDetail = OrderDetail::create([
                    'order_id' =>  $OrderSave->id,
                    'order_number' =>  $inv_num,
                    'product_id' => $dat['product_id'][0],
                    'quantity' => $dat['quantity']
                ]);
                $OrderAttribute = OrderVariation::create([
                    'order_detail_id' =>  $OrderDetail->id,
                    'order_number' =>  $inv_num,
                    'product_id' =>  $dat['product_id'][0],
                    'variation_id' =>  0,
                ]);
                  // validation to check if saved or not
                  if ($OrderSave && $OrderDetail && $OrderAttribute) {
                    // Session::flash('success', 'Payment successful!');
                    //    $this->sendemail($OrderSave);
                    return redirect(route('thankyou'));
                } else {
                    alert("Error", 'product could not placed', 'error');
                    return redirect()->back();
                }
            }
        }
    }

    public function OrderDestroy(Order $id)
    {

        $order_detail = OrderDetail::where('order_number', $id->order_number)->get();
        foreach ($order_detail as $detail) {
            $detail->delete();
        }
        $order_variation = OrderVariation::where('order_number', $id->order_number)->get();
        foreach ($order_variation  as $variation) {
            $variation->delete();
        }
        $order = Order::find($id->id);
        $order->delete();
        Session::forget('cart');
        Session::forget('order_details');
        alert('Success', ' Inventory Product Deleted Successfully', 'success');
        return redirect()->back();
    }
}
