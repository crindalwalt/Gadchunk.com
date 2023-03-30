<x-main-layout>
    {{-- Selective header  --}}

    <x-layouts.header :wishlists=$wishlists  />

    <!-- main body - start
  ================================================== -->
    <main>



        <!-- breadcrumb_section - start
   ================================================== -->
        <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix"
            data-background="{{ asset('images/cartback') }}">
            <div class="overlay" data-bg-color="#1d1d1d"></div>
            <div class="container">
                <h1 class="page_title text-white">Checkout</h1>
                <ul class="breadcrumb_nav ul_li_center clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Shop</li>
                    <li>Checkout</li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb_section - end
   ================================================== -->


        <!-- checkout_section - start
   ================================================== -->
        <section class="checkout_section sec_ptb_140 clearfix">
            <div class="container">

                {{-- <ul class="checkout_step ul_li clearfix">
						<li class="activated"><a href="shop_checkout.html"><span>01.</span> Shopping Cart</a></li>
						<li class="active"><a href="shop_checkout_step2.html"><span>02.</span> Checkout</a></li>
						<li><a href="shop_checkout_step3.html"><span>03.</span> Order Completed</a></li>
					</ul>

					<div class="row">
						<div class="col-lg-6">
							<div class="checkout_collapse_content">
								<div class="wrap_heade">
									<p class="mb-0">
										Returning customer? <a class="collapsed" data-toggle="collapse" href="#loginform_collapse" aria-expanded="false" role="button">Click here to login</a>
									</p>
								</div>
								<div id="loginform_collapse" class="collapse_form_wrap collapse">
									<div class="card-body">
										<form action="#">
											<div class="row">
												<div class="col-lg-6">
													<div class="form_item">
														<input type="email" name="email" placeholder="Email">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form_item">
														<input type="password" name="password" placeholder="Password">
													</div>
												</div>
											</div>
											<div class="login_button">
												<div class="checkbox_item">
													<label for="remember_checkbox"><input id="remember_checkbox" type="checkbox"> Remember me</label>
												</div>
												<button type="submit" class="custom_btn bg_default_red">Login Now</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="checkout_collapse_content">
								<div class="wrap_heade">
									<p class="mb-0">
										<i class="ti-info-alt"></i>
										Have a coupon? <a class="collapsed" data-toggle="collapse" href="#coupon_collapse" aria-expanded="false">Click here to enter your code</a>
									</p>
								</div>
								<div id="coupon_collapse" class="collapse_form_wrap collapse">
									<div class="card-body">
										<form action="#">
											<div class="form_item">
												<input type="text" name="coupon" placeholder="Coupon Code">
											</div>
											<button type="submit" class="custom_btn bg_default_red">Apply coupon</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div> --}}


                <div class="billing_form mb_50">
                    <h3 class="form_title mb_30">Billing details</h3>
                    <form role="form" action="{{ route('stripe.post') }}" method="post"
                        class="require-validation" data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
                        <div class="form_wrap">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form_item">
                                        <span class="input_title">Name<sup>*</sup></span>
                                        <input type="text" name="user_id" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form_item">
                                <span class="input_title">Email Address<sup>*</sup></span>
                                <input type="email" name="checkout_email" value="{{Auth::user()->email}}">
                            </div>
                            <div class="form_item">
                                <span class="input_title">Town/City<sup>*</sup></span>
                                <input type="text" name="checkout_city">
                            </div>
                            <div class="form_item">
                                <span class="input_title">Country<sup>*</sup></span>
                                <input type="text" name="checkout_country">
                            </div>

                            <div class="form_item">
                                <span class="input_title">Address<sup>*</sup></span>
                                <input type="text" name="checkout_address" placeholder="House number and street name">
                            </div>

                            <div class="form_item">
                                <span class="input_title">Postcode / Zip<sup>*</sup></span>
                                <input type="text" name="checkout_postcode">
                            </div>

                            <div class="form_item">
                                <span class="input_title">Phone<sup>*</sup></span>
                                <input type="tel" name="checkout_phone" value="{{Auth::user()->phone}}">
                            </div>


                            <div class="form_item mb-0">
                                <span class="input_title">Order notes<sup>*</sup></span>
                                <textarea name="checkout_note" placeholder="Note about your order, eg. special notes fordelivery."></textarea>
                            </div>

                        </div>

                        <div class="billing_form">
                            <h3 class=" m-4">Your order</h3>

                            <div class="form_wrap">

                                @if ($products->count() > 0)
                                <div class="checkout_table">
                                    <table class="table text-center mb_50">
                                        <thead class="text-uppercase text-uppercase">
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                                @foreach ($products as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="cart_product">
                                                                <div class="item_image">
                                                                    <img src="{{asset('storage/inventory_images/'.$item->inven_prod_images[0]->product_image)}}"
                                                                        alt="image_not_found">
                                                                </div>
                                                                <div class="item_content">
                                                                    <h4 class="item_title mb-0">
                                                                        {{ $item->products->name }}
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <input type="hidden" value="{{ $item->products->id }}" name="product_id">

                                                        <td>
                                                            <span class="price_text">{{ $item->discount_price }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="quantity_text">{{ $item->squantity }}</span>
                                                            <input type="hidden" value="{{$item->squantity }}" name="quantity">

                                                        </td>
                                                        <td><span class="total_price">Rs.{{ $sub_total }}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <span class="subtotal_text">Subtotal</span>
                                                </td>
                                                <td><span class="total_price">Rs.{{ $sub_total }}</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <span class="subtotal_text">Discount</span>
                                                </td>
                                                <td><span class="discount">{{ $discount }}</span></td>
                                            </tr>
                                            <tr class="bg-secondary">
                                                <td></td>
                                                <td></td>
                                                <td class="text-left">
                                                    <span class="subtotal_text">TOTAL</span>
                                                </td>
                                                <td>
                                                    <span class="total_price">Rs.{{ $total }}</span>
                                                </td>
                                                <input type="hidden" value="{{ $total }}" name="total_amount">

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                @else
                                <div class="text-center">
                                    <h3 class="text-danger">Cart have no item</h3>
                                </div>
                            @endif

                                <input type="hidden" value="{{ $total }}" name="total_amount">

                                <div class="accordion" id="accordionExample">

                                    <h3 class="text-primary">Payment Method</h3>
                                    <input type="hidden" name="payment_method" id="payment_method">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link check_payment_method" type="button"
                                                    data-value="jazzcash" role="button" value="jazzcash"
                                                    data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Jazzcash
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <input class="form-control border border-danger" name="jazzcash"
                                                    type="text" placeholder="Enter jazzcash number...."
                                                    maxlength="11">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed check_payment_method"
                                                    data-value="easypaisa" value="easypaisa" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    EasyPaisa
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <input class="form-control border border-danger" name="easypaisa"
                                                    type="text" placeholder="Enter Easypaisa number...."
                                                    maxlength="11">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed check_payment_method"
                                                    data-value="stripe" value="stripe" type="button"
                                                    data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Stripe (Bank Account)
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class='form-row row'>
                                                    <div class='col-xs-12 form-group card required'>
                                                        <label class='control-label'>Card Number</label> <input
                                                            class='form-control card-number'
                                                            type='text'>
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


                                                <div class='form-row row'>

                                                    <div class='col-md-12 error form-group hide'>

                                                        <div class='alert-danger alert'>Put Valid details</div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="custom_btn bg_default_red mt-3">PLACE ORDER</button>

                                </div>

                            </div>
                    </form>
                </div>
            </div>



            </div>
        </section>
        <!-- checkout_section - end
   ================================================== -->

    </main>
    <!-- main body - end
================================================== -->




</x-main-layout>
