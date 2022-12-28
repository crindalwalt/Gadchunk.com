<x-main-layout>
    <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Order Tracking</h2>
                <ul>
                    <li>
                        <a href="../template/index.blade.php">Home </a>
                    </li>
                    <li><span> > </span></li>
                    <li>
                        <a href="../template/index.blade.php">Product </a>
                    </li>
                    <li><span> > </span></li>
                    <li class="active"> Order Tracking </li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1">
            <img src="assets/images/about/breadcrumb-1.png" alt="">
        </div>
        <div class="breadcrumb-img-2">
            <img src="assets/images/about/breadcrumb-2.png" alt="">
        </div>
    </div>
    <!-- order tracking start -->
    <div class="order-tracking-area pt-155 pb-160">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-10 ms-auto me-auto">
                    <div class="order-tracking-content">
                        <p>To track your order please enter your Order ID in the box below and press the "Track" button.
                            This was given to you on your receipt and in the confirmation email you should have
                            received.</p>
                        <div class="order-tracking-form">
                            <form action="#">
                                <div class="sin-order-tracking">
                                    <label>Order ID</label>
                                    <input type="text" placeholder="Found in your order confirmation email.">
                                </div>
                                <div class="sin-order-tracking">
                                    <label>Billing Email</label>
                                    <input type="email" placeholder="Email you used during checkout">
                                </div>
                                <div class="order-track-btn">
                                    <a href="#">Track Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
