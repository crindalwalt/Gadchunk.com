<x-main-layout>
        <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Cart</h2>
                    <ul>
                        <li>
                            <a href="index.blade.php">Home </a>
                        </li>
                        <li><span> > </span></li>
                        <li>
                            <a href="index.blade.php">Product </a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active"> Cart </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-check-order-link-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 ms-auto me-auto">
                        <div class="cart-check-order-link">
                            <a class="active" href="cart.html">Shopping Cart</a>
                            <a href="checkout.blade.php">Check Out</a>
                            <a href="../frontEnd/order-complete.html">Order Complete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-area bg-gray pt-160 pb-160">
            <div class="container">
                <form action="#">
                    <div class="proceed-btn">
                        <a href="#">Proceed to Checkout</a>
                    </div>
                    <div class="cart-table-content">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th class="th-text-center"> Price</th>
                                        <th class="th-text-center">Quantity</th>
                                        <th class="th-text-center">Total Prce</th>
                                        <th class="th-text-center">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart-product">
                                            <div class="product-img-info-wrap">
                                                <div class="product-img">
                                                    <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Demo Product Title</a></h4>
                                                    <span>Color :  Black</span>
                                                    <span>Size :     SL</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-price"><span class="amount">$56.00</span></td>
                                        <td class="cart-quality">
                                            <div class="pro-details-quality">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box plus-minus-width-inc" type="text" name="qtybutton" value="02">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-total"><span>$112.00</span></td>
                                        <td class="product-remove"><a href="#"><img class="inject-me" src="assets/images/icon-img/close.svg" alt=""></a></td>
                                    </tr>
                                    <tr>
                                        <td class="cart-product">
                                            <div class="product-img-info-wrap">
                                                <div class="product-img">
                                                    <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Demo Product Title</a></h4>
                                                    <span>Color :  Black</span>
                                                    <span>Size :     SL</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-price"><span class="amount">$56.00</span></td>
                                        <td class="cart-quality">
                                            <div class="pro-details-quality">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box plus-minus-width-inc" type="text" name="qtybutton" value="02">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-total"><span>$112.00</span></td>
                                        <td class="product-remove"><a href="#"><img class="inject-me" src="assets/images/icon-img/close.svg" alt=""></a></td>
                                    </tr>
                                    <tr>
                                        <td class="cart-product">
                                            <div class="product-img-info-wrap">
                                                <div class="product-img">
                                                    <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Demo Product Title</a></h4>
                                                    <span>Color :  Black</span>
                                                    <span>Size :     SL</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-price"><span class="amount">$56.00</span></td>
                                        <td class="cart-quality">
                                            <div class="pro-details-quality">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box plus-minus-width-inc" type="text" name="qtybutton" value="02">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-total"><span>$112.00</span></td>
                                        <td class="product-remove"><a href="#"><img class="inject-me" src="assets/images/icon-img/close.svg" alt=""></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-shiping-update-wrapper">
                            <a href="#">Continure Shopping</a>
                            <a href="#">Update Cart</a>
                            <a href="#">Clear Cart</a>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="discount-code-wrapper discount-tax-wrap">
                            <h4>Coupon Code </h4>
                            <div class="discount-code">
                                <p>Enter your coupon code if you have one!</p>
                                <form>
                                    <input type="text" required="" placeholder="Enter your code here." name="name">
                                    <button type="submit">Apply Coupon </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="tax-wrapper discount-tax-wrap">
                            <h4>Get shipping estimatesss</h4>
                            <div class="discount-code">
                                <p>Enter your coupon code if you have one!</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select class="nice-select nice-select-style-3 cart-tax-select">
                                            <option>Select Country </option>
                                            <option>Bangladesh</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" required="" placeholder="Zip Code" name="name">
                                    </div>
                                </div>
                                <button type="submit">Apply Coupon </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-main-layout>
