<x-main-layout>
    <x-layouts.header :wishlists="$wishlists" :categories="$categories" :cartitems="$cart_items" />

    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-95 pb-50" data-bg-color="#EFF1F5">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title">Checkout</h3>
                            <div class="breadcrumb__list">
                                <span><a href="checkout.html#">Home</a></span>
                                <span>Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- checkout area start -->
        <section class="tp-checkout-area pb-120" data-bg-color="#EFF1F5">
            <div class="container">
                <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                @csrf
                <div class="row">
                    {{-- <div class="col-xl-7 col-lg-7">
                    <div class="tp-checkout-verify">
                       <div class="tp-checkout-verify-item">
                          <p class="tp-checkout-verify-reveal">Returning customer? <button type="button" class="tp-checkout-login-form-reveal-btn">Click here to login</button></p>

                          <div id="tpReturnCustomerLoginForm" class="tp-return-customer">
                             <form action="checkout.html#">

                                <div class="tp-return-customer-input">
                                   <label>Email</label>
                                   <input type="text" placeholder="Your Email">
                                </div>
                                <div class="tp-return-customer-input">
                                   <label>Password</label>
                                   <input type="password" placeholder="Password">
                                </div>

                                <div class="tp-return-customer-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                                   <div class="tp-return-customer-remeber">
                                      <input id="remeber" type="checkbox">
                                      <label for="remeber">Remember me</label>
                                   </div>
                                   <div class="tp-return-customer-forgot">
                                      <a href="forgot.html">Forgot Password?</a>
                                   </div>
                                </div>
                                <button type="submit" class="tp-return-customer-btn tp-checkout-btn">Login</button>
                             </form>
                          </div>
                       </div>
                       <div class="tp-checkout-verify-item">
                          <p class="tp-checkout-verify-reveal">Have a coupon? <button type="button" class="tp-checkout-coupon-form-reveal-btn">Click here to enter your code</button></p>

                          <div id="tpCheckoutCouponForm" class="tp-return-customer">
                             <form action="checkout.html#">
                                <div class="tp-return-customer-input">
                                   <label>Coupon Code :</label>
                                   <input type="text" placeholder="Coupon">
                                </div>
                                <button type="submit" class="tp-return-customer-btn tp-checkout-btn">Apply</button>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div> --}}

                        <div class="col-lg-8">
                            <div class="tp-checkout-bill-area">
                                <h3 class="tp-checkout-bill-title">Billing Details</h3>
                                <div class="tp-checkout-bill-form">
                                    <div class="tp-checkout-bill-inner">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="tp-checkout-input">
                                                    <label>First Name <span>*</span></label>
                                                    <input type="text"name="user_id"
                                                        value="{{ Auth::user()->name }}">
                                                        @error('user_id')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="tp-checkout-input">
                                                    <label>Email Address<span>*</span></label>
                                                <input type="text" name="checkout_email"
                                                    value="{{ Auth::user()->email }}">
                                                    @error('checkout_email')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="tp-checkout-input">
                                                    <label>Address <span>*</span></label>
                                                    <input type="text" name="checkout_address"
                                                        placeholder="Address here...">
                                                        @error('checkout_address')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="tp-checkout-input">
                                                    <label>City (Tehsil / District)<span>*</span></label>
                                                    <input type="text" name="checkout_city" placeholder="Enter City...">
                                                    @error('checkout_city')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="tp-checkout-input">
                                                    <label>Country / Region <span>*</span></label>
                                                    <input type="text" name="checkout_country" placeholder="Enter Country...">
                                                    @error('checkout_country')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="tp-checkout-input">
                                                    <label>PostCode/Zip (optional)</label>
                                                    <input type="text" name="checkout_postcode"
                                                        placeholder="Postal Code...">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="tp-checkout-input">
                                                    <label>Mobile Number</label>
                                                    <input type="text" name="checkout_phone"
                                                        value="{{ Auth::user()->phone }}">
                                                        @error('checkout_phone')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="tp-checkout-input">
                                                    <label>Order notes (optional) </label>
                                                    <textarea name="checkout_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- checkout place order -->
                            <div class="tp-checkout-place white-bg">
                                <h3 class="tp-checkout-place-title">Your Order</h3>

                                @if ($products->count() > 0)
                                    <div class="tp-order-info-list">
                                        <ul>

                                            <!-- header -->
                                            <li class="tp-order-info-list-header">
                                                <h4>Product</h4>
                                                <h4>Total</h4>
                                            </li>

                                            @foreach ($products as $item)
                                                <!-- item list -->
                                                <input type="hidden" value="{{ $item->id }}"
                                            name="product_id[]">
                                                <input type="hidden" value="1"
                                            name="quantity">
                                                <li class="tp-order-info-list-desc">
                                                    <p>{{ $item->name }} <span> x  {{ $item->prod_inventory->squantity }}</span></p>
                                                    <span class="single_total{{ $item->id }}">Rs.{{ $item->prod_inventory->retail_price * $item->prod_inventory->squantity }}</span>
                                                </li>
                                            @endforeach
                                            @error('product_id')
                                                                    <div class="text-danger fw-semibold">Product not yet selected...</div>
                                                                @enderror

                                            <!-- subtotal -->
                                            <li class="tp-order-info-list-subtotal">
                                                <span>Subtotal</span>
                                                <span>{{ $sub_total }}</span>
                                            </li>

                                            <!-- shipping -->
                                            {{-- <li class="tp-order-info-list-shipping">
                                            <span>Shipping</span>
                                            <div
                                                class="tp-order-info-list-shipping-item d-flex flex-column align-items-end">
                                                <span>
                                                    <input id="flat_rate" type="radio" name="shipping">
                                                    <label for="flat_rate">Flat rate: <span>$20.00</span></label>
                                                </span>
                                                <span>
                                                    <input id="local_pickup" type="radio" name="shipping">
                                                    <label for="local_pickup">Local pickup: <span>$25.00</span></label>
                                                </span>
                                                <span>
                                                    <input id="free_shipping" type="radio" name="shipping">
                                                    <label for="free_shipping">Free shipping</label>
                                                </span>
                                            </div>
                                        </li> --}}

                                            <!-- discount -->
                                            <li class="tp-order-info-list-total">
                                                <span>Discount</span>
                                                <span class="discount">{{ $discount }}</span>
                                            </li>
                                            <!-- total -->
                                            <li class="tp-order-info-list-total">
                                                <span>Total</span>
                                                <span class="total_price">{{ $total }}</span>
                                            </li>
                                            <input type="hidden" value="{{ $total }}"
                                            name="total_amount">
                                            @error('total_amount')
                                                <div class="text-danger fw-semibold">Total Amount missing...</div>
                                            @enderror

                                        </ul>
                                    </div>
                                @else
                                    <div class="text-center">
                                        <h3 class="text-danger">Cart have no item</h3>
                                    </div>
                                @endif

                                <div class="tp-checkout-payment">
                                    <h3 class="text-primary my-3">Payment Method</h3>

                                    <input type="hidden" name="payment_method" id="payment_method">
                                    @error('payment_method')
                                    <div class="text-danger fw-semibold">Select Payment Method.</div>
                                @enderror
                                    <div class="tp-checkout-payment-item">
                                        <input type="radio" class="check_payment_method" data-value="stripe" value="stripe" id="back_transfer" name="payment_method">
                                        <label for="back_transfer" data-bs-toggle="direct-bank-transfer">Stripe (Bank Transfer)</label>
                                        <div class="tp-checkout-payment-desc direct-bank-transfer">
                                            <div class='form-row row'>
                                                <div class='col-xs-12 form-group  required'>
                                                    <label class='control-label'>Card Number</label> <input
                                                        class='form-control card-number' type='text'>
                                                </div>
                                            </div>
                                            <div class='form-row row'>
                                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                    <label class='control-label'>CVC</label> <input
                                                        autocomplete='off' class='form-control card-cvc'
                                                        placeholder='ex. 311' size='4' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Month</label> <input
                                                        class='form-control card-expiry-month' placeholder='MM'
                                                        size='2' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Year</label> <input
                                                        class='form-control card-expiry-year' placeholder='YYYY'
                                                        size='4' type='text'>
                                                </div>
                                            </div>


                                            <div class='form-row row mt-2'>

                                                <div class='col-md-12 error form-group hide'>

                                                    <div class='alert-danger alert'>Put Valid details</div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tp-checkout-payment-item">
                                        <input type="radio" class="check_payment_method" data-value="Cash-on-delivery" value="Cash-on-delivery" id="cod" name="payment_method">
                                        <label for="cod">Cash on Delivery</label>
                                        <div class="tp-checkout-payment-desc cash-on-delivery">
                                            <p>Amount Received after delivery.</p>
                                        </div>
                                    </div>
                                    {{-- <div class="tp-checkout-payment-item paypal-payment">
                                        <input type="radio" id="paypal" name="payment">
                                        <label for="paypal">PayPal <img src="assets/img/icon/payment-option.png"
                                                alt=""> <a href="checkout.html#">What is PayPal?</a></label>
                                    </div> --}}
                                </div>
                                {{-- <div class="tp-checkout-agree">
                                    <div class="tp-checkout-option">
                                        <input id="read_all" type="checkbox">
                                        <label for="read_all">I have read and agree to the website.</label>
                                    </div>
                                </div> --}}
                                <div class="tp-checkout-btn-wrapper">
                                    {{-- <a href="checkout.html#" class="tp-checkout-btn w-100">Place Order</a> --}}
                                    <button type="submit" class="btn btn-primary mt-3">PLACE ORDER</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- checkout area end -->


    </main>



    <x-layouts.footer />
</x-main-layout>
