<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Review;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['orders'] = Order::get();
        $data['orders_pending'] = Order::where('status','pending')->get();
        $data['orders_deliver'] = Order::where('status','delivered')->get();
        return view("admin.orders.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        @dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function update_status(Request $request , Order $id){
        $request->validate([
            'status' => 'required',
        ]);
        $update_status= Order::where("id", $id->id)->update(["status" => $request->status]);
        if($update_status){
            alert('Success', 'Status Update Successfully', 'success');
            return redirect()->back();
        }else {
            return view('template.404');
        }
     
    }
    public function review(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'description' => 'required|string',
        ]);
        // @dd($request->all());
        $product_check = Product::where('id', $request->product_id)->first();
                // @dd($product_check);

        if ( $product_check) {
            $exist_review = Reviews::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->first();
            if ($exist_review) {
                $exist_review->product_id = $request->product_id;
                $exist_review->user_id = $request->user_id;
                $exist_review->subject = $request->subject;
                $exist_review->description = $request->description;
                $exist_review->stars_rating = $request->star_rating;
                $exist_review->update();
            } else {
                Reviews::create([
                    'product_id' => $request->product_id,
                    'user_id' => $request->user_id,
                    'subject' => $request->subject,
                    'description' => $request->description,
                    'stars_rating' => $request->star_rating
                ]);
            }
        }


        alert('Success', 'Reviews submit successfully', 'success');
        return redirect()->back();
    }
}
