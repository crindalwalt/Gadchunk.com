<x-main-layout>
        <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Checkout</h2>
                    <ul>
                        <li>
                            <a href="index.blade.php">Home </a>
                        </li>
                        <li><span> > </span></li>
                        <li>
                            <a href="index.blade.php">Product </a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active"> Checkout </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-check-order-link-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 ms-auto me-auto">
                        <div class="cart-check-order-link">
                            <a href="cart.blade.php">Shopping Cart</a>
                            <a class="active" href="checkout.html">Check Out</a>
                            <a href="../frontEnd/order-complete.html">Order Complete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-area bg-gray pt-160 pb-160">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-left-wrap">
                            <div class="login-guest-top">
                                <div class="checkout-tab nav">
                                    <a href="#checkout-login" data-bs-toggle="tab">
                                        Log In
                                    </a>
                                    <a class="active" href="#checkout-guest" data-bs-toggle="tab">
                                        Buy as a Guest
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="checkout-login" class="tab-pane">
                                        <div class="checkout-login-wrap">
                                            <h4>Login information</h4>
                                            <div class="checkout-login-style">
                                                <form action="#">
                                                    <input type="text" name="user-name" placeholder="Username">
                                                    <input type="password" name="user-password" placeholder="Password">
                                                    <div class="checkout-button-box">
                                                        <div class="checkout-login-toggle-btn">
                                                            <input type="checkbox">
                                                            <label>Remember me</label>
                                                            <a href="#">Forgot Password?</a>
                                                        </div>
                                                        <button type="submit">Login</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="checkout-guest" class="tab-pane active">
                                        <div class="checkout-guest-wrap">
                                            <h4>Contact information</h4>
                                            <div class="checkout-guest-style">
                                                <form action="#">
                                                    <input type="text" name="user-name" placeholder="Enter Mobile Number or Email">
                                                    <div class="guest-login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Keep me up to date on news and exclusive offers</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shipping-address-wrap">
                                <h4 class="checkout-title">Shipping address</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Fast Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Last Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Address" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Address More" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="nice-select nice-select-style-3 cart-tax-select">
                                            <option>Select Country </option>
                                            <option>Bangladesh</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>India</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="billing-info">
                                            <input type="text" required="" placeholder="Postal Code" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-save-info">
                                            <input class="checkout-checkbox2" type="checkbox">
                                            <span>Save this information for next time</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="payment-details mb-40">
                            <h4 class="checkout-title">Payment Deatails</h4>
                            <ul>
                                <li>Cart Subtotal <span>$155.00</span></li>
                                <li>Shipping and Handing <span>$15.00</span></li>
                                <li>Vat <span>$00.00</span></li>
                            </ul>
                            <div class="total-order">
                                <ul>
                                    <li>Order Total <span>$170.00</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-details">
                            <h4 class="checkout-title">Payment Deatails</h4>
                            <div class="payment-method">
                                <div class="pay-top sin-payment">
                                    <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                    <label for="payment_method_1"> Paypal </label>
                                    <div class="payment-box payment_method_bacs">
                                        <form action="#">
                                            <input type="text" required="" placeholder="Enter Your Paypal Email" name="name">
                                        </form>
                                    </div>
                                </div>
                                <div class="pay-top sin-payment">
                                    <input id="payment-method-2" class="input-radio" type="radio" value="cheque" name="payment_method">
                                    <label for="payment-method-2">Card </label>
                                    <div class="payment-box payment_method_bacs">
                                        <form action="#">
                                            <input type="text" required="" placeholder="Enter Your Card Email" name="name">
                                        </form>
                                    </div>
                                </div>
                                <div class="pay-top sin-payment">
                                    <input id="payment-method-3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                    <label for="payment-method-3">Bank or Check </label>
                                    <div class="payment-box payment_method_bacs">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back-continue-wrap">
                    <a href="#">Back to cart</a>
                    <a href="#">Please Order</a>
                </div>
            </div>
        </div>
</x-main-layout>
