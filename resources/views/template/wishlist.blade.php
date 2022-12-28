<x-main-layout>
    <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Wishlist</h2>
                <ul>
                    <li>
                        <a href="index.blade.php">Home </a>
                    </li>
                    <li><span> > </span></li>
                    <li>
                        <a href="index.blade.php">Product </a>
                    </li>
                    <li><span> > </span></li>
                    <li class="active"> Wishlist </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cart-area bg-gray pt-160 pb-160">
        <div class="container">
            <form action="#">
                <div class="cart-table-content wishlist-wrap">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th class="th-text-center"> Price</th>
                                <th class="th-text-center">Quantity</th>
                                <th class="th-text-center">Total Prce</th>
                                <th class="th-text-center">Add To Cart</th>
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
                                <td class="product-wishlist-cart"><a href="#">Add To Cart</a></td>
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
                                <td class="product-wishlist-cart"><a href="#">Add To Cart</a></td>
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
                                <td class="product-wishlist-cart"><a href="#">Add To Cart</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-main-layout>

