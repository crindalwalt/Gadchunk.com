<x-main-layout>
    <x-layouts.header :wishlists="$wishlists" :categories="$categories" :cartitems="$cart_items" />



    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-95 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title">Track your order</h3>
                            <div class="breadcrumb__list">
                                <span><a href="order.html#">Home</a></span>
                                <span>Track your order</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        @if ($orders->isEmpty())
            <div class="card  bg-white shadow p-5">
                <div class="text-center">
                    <h1>Not Order Yet!</h1>
                </div>
            </div>
        @else
            @foreach ($orders as $order)
                <!-- order area start -->
                <section class="tp-order-area pb-160">
                    <div class="container">
                        <div class="tp-order-inner">
                            <div class="row gx-0">
                                <div class="col-lg-6">
                                    <div class="tp-order-details" data-bg-color="#4F3D97">
                                        <div class="tp-order-details-top text-center mb-70">
                                            <div class="tp-order-details-icon">
                                                <span>
                                                    <svg width="52" height="110" viewBox="0 0 52 52"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M46 26V51H6V26" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M51 13.5H1V26H51V13.5Z" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M26 51V13.5" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M26 13.5H14.75C13.0924 13.5 11.5027 12.8415 10.3306 11.6694C9.15848 10.4973 8.5 8.9076 8.5 7.25C8.5 5.5924 9.15848 4.00269 10.3306 2.83058C11.5027 1.65848 13.0924 1 14.75 1C23.5 1 26 13.5 26 13.5Z"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M26 13.5H37.25C38.9076 13.5 40.4973 12.8415 41.6694 11.6694C42.8415 10.4973 43.5 8.9076 43.5 7.25C43.5 5.5924 42.8415 4.00269 41.6694 2.83058C40.4973 1.65848 38.9076 1 37.25 1C28.5 1 26 13.5 26 13.5Z"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="tp-order-details-content">
                                                <h3 class="tp-order-details-title">Your Order
                                                    <thead class="thead-dark">
                                                        @if ($order->status == 'pending')
                                                            Pending
                                                        @elseif($order->status == 'approved')
                                                            Confirmed
                                                        @elseif($order->status == 'delivered')
                                                            Delivered
                                                        @elseif($order->status == 'dispatched')
                                                            Dispatched
                                                            Cancelled
                                                        @endif
                                                </h3>
                                                <p>We will send you a shipping confirmation email as soon <br> as your
                                                    order
                                                    ships</p>
                                            </div>
                                        </div>
                                        <div class="tp-order-details-item-wrapper">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="tp-order-details-item">
                                                        <h4>Order Date:</h4>
                                                        <p>{{ $order->created_at }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="tp-order-details-item">
                                                        <h4>Delivery: </h4>
                                                        <p>Deliver in month</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="tp-order-details-item">
                                                        <h4>Order Number:</h4>
                                                        <p>{{ $order->order_number }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="tp-order-details-item">
                                                        <h4>Payment Method:</h4>
                                                        <p>{{ $order->payment_method }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-order-info-wrapper">
                                        <h4 class="tp-order-info-title">Order Details</h4>

                                        <div class="tp-order-info-list">
                                            <ul>

                                                <!-- header -->
                                                <li class="tp-order-info-list-header">
                                                    <h4>Product</h4>
                                                    <h4>Total</h4>
                                                </li>
                                                @foreach ($order->items as $products)
                                                    <!-- item list -->
                                                    <li class="tp-order-info-list-desc">
                                                        <p>{{ $products->product[0]->name }}<span> x {{ $products->quantity  }}</span></p>
                                                        <span class="single_total{{ $products->id }}">{{$products->product[0]->prod_inventory->retail_price * $products->quantity}}</span>
                                                    </li>
                                                @endforeach


                                                <!-- subtotal -->
                                                <li class="tp-order-info-list-subtotal">
                                                    <span>Subtotal</span>
                                                    <span>Rs. {{ $order->total_amount  }}</span>
                                                </li>

                                                <!-- shipping -->
                                                <!-- shipping -->
                                                {{-- <li class="tp-order-info-list-shipping">
                                                    <span>Shipping</span>
                                                    <div
                                                        class="tp-order-info-list-shipping-item d-flex flex-column align-items-end">
                                                        <span>
                                                            <input id="shipping_info" type="checkbox">
                                                            <label for="shipping_info">Flat rate:
                                                                <span>$20.00</span></label>
                                                        </span>
                                                    </div>
                                                </li> --}}

                                                <!-- total -->
                                                <li class="tp-order-info-list-total">
                                                    <span>Total</span>
                                                    <span>Rs. {{ $order->total_amount  }}</span>
                                                </li>
                                            </ul>

                                        </div>
                                        @if ($order->status == 'pending')
                                        <form class="d-inline" action="{{ route('order.destroy', $order->id) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Cancel Order</button>
                                        </form>
                                    @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- order area end -->
            @endforeach
        @endif


    </main>
    <x-layouts.footer />
</x-main-layout>
