<x-main-layout>
    <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Order Complete</h2>
                <ul>
                    <li>
                        <a href="../template/index.blade.php">Home </a>
                    </li>
                    <li><span> > </span></li>
                    <li>
                        <a href="../template/index.blade.php">Product </a>
                    </li>
                    <li><span> > </span></li>
                    <li class="active"> Order Complete </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cart-check-order-link-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ms-auto me-auto">
                    <div class="cart-check-order-link">
                        <a href="../template/cart.blade.php">Shopping Cart</a>
                        <a href="../template/checkout.blade.php">Check Out</a>
                        <a class="active" href="order-complete.html">Order Complete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="order-complete-area bg-gray pt-160 pb-160">
        <div class="container">
            <div class="order-complete-title">
                <h3>Thank you. Your order has been received.</h3>
            </div>
            <div class="order-product-details">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ORDER NO</th>
                                    <th>DATE</th>
                                    <th>TOTAL</th>
                                    <th>PAYMENT METHOD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        M 2653257
                                    </td>
                                    <td>
                                        JUNE 15, 2018
                                    </td>
                                    <td>
                                        $70.00
                                    </td>
                                    <td>
                                        CHECK PAYMENT
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>
