<x-main-layout>
    {{-- Selective header  --}}

    <div>

        <!-- backtotop - start -->
        <div id="thetop"></div>
        <div class="backtotop bg_default_red">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader - start -->
        <!-- <div id="preloader"></div> -->
        <!-- preloader - end -->


        <!-- header_section - start
  ================================================== -->
        <header class="header_section default_header sticky_header clearfix">
            {{-- <div class="header_top text-white" data-bg-color="#000000">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <p class="mb-0">Free Shipping on Domestic Orders over $150</p>
                        </div>

                        <div class="col-lg-5">
                            <ul class="primary_social_links ul_li_right clearfix">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="header_bottom clearfix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand_logo">
                                <a class="brand_link" href="index.html">
                                    <img src="assets/images/logo/logo_27_1x.png"
                                        srcset="assets/images/logo/logo_27_2x.png 2x" alt="logo_not_found">
                                </a>

                                <ul class="mh_action_btns ul_li clearfix">
                                    <li>
                                        <button type="button" class="search_btn" data-toggle="collapse"
                                            data-target="#search_body_collapse" aria-expanded="false"
                                            aria-controls="search_body_collapse">
                                            <i class="fal fa-search"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="cart_btn">
                                            <i class="fal fa-shopping-cart"></i>
                                            <span class="btn_badge">2</span>
                                        </button>
                                    </li>
                                    <li><button type="button" class="mobile_menu_btn"><i
                                                class="far fa-bars"></i></button></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <nav class="main_menu clearfix">
                                <ul class="ul_li_center clearfix">
                                    <li class="menu_item_has_child">
                                        <a href="#!">Home</a>
                                        <div class="mega_menu text-center">
                                            <div class="background" data-bg-color="#ffffff">
                                                <div class="container">
                                                    <ul class="home_pages ul_li clearfix">
                                                        <li>
                                                            <a href="home_carparts.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/carparts.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Car Parts</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_classic_ecommerce.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/classic_ecommarce.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Classic Ecommerce</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_creative_onelook.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/creative_onelook.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Creative Onelook</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_electronic.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/electronic.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Electronic</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_fashion.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/fashion.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Fashion</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_fashion_minimal.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/fashion_minimal.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Fashion Minimal</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_furniture.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/furniture.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Furniture</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_gadget.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/gadget.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Gadget</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_lookbook_creative.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/lookbook_creative.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Lookbook Creative</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_lookbook_slide.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/lookbook_slide.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Lookbook Slide</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_medical.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/medical.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Medical</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_modern.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/modern.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Modern</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_modern_minimal.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/modern_minimal.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Modern Minimal</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_motorcycle.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/motorcycle.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Motorcycle</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_parallax_shop.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/parallax_shop.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Parallax Shop</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_simple_shop.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/simple_shop.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Simple Shop</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_single_story_black.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/single_story_black.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Single Story Black</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_single_story_white.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/single_story_white.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Single Story White</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_sports.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/sports.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Sports Shop</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_supermarket.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/supermarket.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Supermarket</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="home_watch.html">
                                                                <span class="item_image">
                                                                    <img src="assets/images/home_pages/watch.png"
                                                                        alt="image_not_found">
                                                                </span>
                                                                <span class="item_title">Watch</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu_item_has_child">
                                        <a href="#!">Shop</a>
                                        <div class="mega_menu">
                                            <div class="background" data-bg-color="#ffffff">
                                                <div class="container">
                                                    <div class="row mt__30">
                                                        <div class="col-lg-3">
                                                            <div class="page_links">
                                                                <h3 class="title_text">Carparts</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="carparts_shop.html">Shop Page</a></li>
                                                                    <li><a href="carparts_shop_grid.html">Shop Grid</a>
                                                                    </li>
                                                                    <li><a href="carparts_shop_list.html">Shop List</a>
                                                                    </li>
                                                                    <li><a href="carparts_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Classic Ecommerce</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="classic_ecommerce_shop.html">Shop
                                                                            Page</a></li>
                                                                    <li><a href="classic_ecommerce_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Electronic</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="electronic_shop.html">Shop Page</a>
                                                                    </li>
                                                                    <li><a href="electronic_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Fashion</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="fashion_shop.html">Shop Page</a></li>
                                                                    <li><a href="fashion_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="page_links">
                                                                <h3 class="title_text">Fashion Minimal</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="fashion_minimal_shop.html">Shop
                                                                            Page</a></li>
                                                                    <li><a href="fashion_minimal_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Fashion Minimal</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="fashion_minimal_shop.html">Shop
                                                                            Page</a></li>
                                                                    <li><a href="fashion_minimal_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Furniture</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="furniture_shop.html">Shop Page</a>
                                                                    </li>
                                                                    <li><a href="furniture_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Gadget</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="gadget_shop.html">Shop Page</a></li>
                                                                    <li><a href="gadget_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="page_links">
                                                                <h3 class="title_text">Medical</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="medical_shop.html">Shop Page</a></li>
                                                                    <li><a href="medical_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Modern Minimal</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="modern_minimal_shop.html">Shop
                                                                            Page</a></li>
                                                                    <li><a href="modern_minimal_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Modern</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="modern_shop.html">Shop Page</a></li>
                                                                    <li><a href="modern_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Motorcycle</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="motorcycle_shop_grid.html">Shop
                                                                            Grid</a></li>
                                                                    <li><a href="motorcycle_shop_list.html">Shop
                                                                            List</a></li>
                                                                    <li><a href="motorcycle_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="page_links">
                                                                <h3 class="title_text">Simple Shop</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="simple_shop.html">Shop Page</a></li>
                                                                    <li><a href="simple_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Sports</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="sports_shop.html">Shop Page</a></li>
                                                                    <li><a href="sports_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Lookbook</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="lookbook_creative_shop.html">Shop
                                                                            Page</a></li>
                                                                    <li><a href="lookbook_creative_shop_details.html">Shop
                                                                            Details</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="page_links">
                                                                <h3 class="title_text">Shop Other Pages</h3>
                                                                <ul class="ul_li_block">
                                                                    <li><a href="#!"><del>Shop Page</del></a></li>
                                                                    <li><a href="shop_details.html">Shop Details</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu_item_has_child">
                                        <a href="#!">Pages</a>
                                        <ul class="submenu">
                                            <li class="menu_item_has_child">
                                                <a href="#!">Shop Inner Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="shop_cart.html">Shopping Cart</a></li>
                                                    <li><a href="shop_checkout.html">Checkout Step 1</a></li>
                                                    <li><a href="shop_checkout_step2.html">Checkout Step 2</a></li>
                                                    <li><a href="shop_checkout_step3.html">Checkout Step 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li class="menu_item_has_child">
                                                <a href="#!">Blogs</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog Page</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_has_child">
                                                <a href="#!">Compare</a>
                                                <ul class="submenu">
                                                    <li><a href="compare_1.html">Compare V.1</a></li>
                                                    <li><a href="compare_2.html">Compare V.2</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_has_child">
                                                <a href="#!">Register</a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="signup.html">Sign Up</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#!">About us</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-lg-3">
                            <ul class="action_btns_group ul_li_right clearfix">
                                <li>

                                    <button type="button" class="cart_btn">
                                        <i class="fal fa-heart"></i>
                                        <span class="btn_badge " id="wishlist-count">0</span>
                                    </button>

                                </li>
                                <li>
                                    <button type="button" class="cart_btn">
                                        <i class="fal fa-shopping-cart"></i>
                                        <span class="btn_badge" id="cart-count">0</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="search_body_collapse" class="search_body_collapse collapse">
                <div class="search_body">
                    <div class="container-fluid prl_90">
                        <form action="#">
                            <div class="form_item mb-0">
                                <input type="search" name="search" placeholder="Type here...">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- header_section - end
  ================================================== -->
    </div>

    <!-- main body - start
  ================================================== -->
    <main>



        <!-- breadcrumb_section - start
   ================================================== -->
        <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix"
            data-background="assets/images/breadcrumb/bg_01.jpg">
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
                                <div class="col-lg-6">
                                    <div class="form_item">
                                        <span class="input_title">First Name<sup>*</sup></span>
                                        <input type="text" name="firstname">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form_item">
                                        <span class="input_title">Last Name<sup>*</sup></span>
                                        <input type="text" name="lastname">
                                    </div>
                                </div>
                            </div>

                            <div class="form_item">
                                <span class="input_title">Company Name<sup>*</sup></span>
                                <input type="text" name="company">
                            </div>

                            <div class="option_select">
                                <span class="input_title">Country<sup>*</sup></span>
                                <select name="country">
                                    <option value="USA" selected>United States</option>
                                    <option value="USA">United States</option>
                                    <option value="USA">United States</option>
                                    <option value="USA">United States</option>
                                </select>
                            </div>

                            <div class="form_item">
                                <span class="input_title">Address<sup>*</sup></span>
                                <input type="text" name="address" placeholder="House number and street name">
                            </div>

                            <div class="form_item">
                                <span class="input_title">Town/City<sup>*</sup></span>
                                <input type="text" name="city">
                            </div>

                            <div class="form_item">
                                <span class="input_title">County<sup>*</sup></span>
                                <input type="text" name="county">
                            </div>

                            <div class="form_item">
                                <span class="input_title">Postcode / Zip<sup>*</sup></span>
                                <input type="text" name="postcode">
                            </div>

                            <div class="form_item">
                                <span class="input_title">Phone<sup>*</sup></span>
                                <input type="tel" name="phone">
                            </div>

                            <div class="form_item">
                                <span class="input_title">Email Address<sup>*</sup></span>
                                <input type="email" name="email">
                            </div>

                            <div class="form_item mb-0">
                                <span class="input_title">Order notes<sup>*</sup></span>
                                <textarea name="note" placeholder="Note about your order, eg. special notes fordelivery."></textarea>
                            </div>

                        </div>

                        <div class="billing_form">
                            <h3 class="form_title mb_30">Your order</h3>

                            <div class="form_wrap">

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

                                            @if ($products->count() > 0)
                                                @foreach ($products as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="cart_product">
                                                                <div class="item_image">
                                                                    <img src="assets/images/cart/img_04.jpg"
                                                                        alt="image_not_found">
                                                                </div>
                                                                <div class="item_content">
                                                                    <h4 class="item_title mb-0">
                                                                        {{ $item->products->name }}
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="price_text">{{ $item->discount_price }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="quantity_text">{{ $item->squantity }}</span>
                                                        </td>
                                                        <td><span class="total_price">Rs.{{ $sub_total }}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <div class="text-center">
                                                    <h3 class="text-danger">Cart have no item</h3>
                                                </div>
                                            @endif
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <span class="subtotal_text">Subtotal</span>
                                                </td>
                                                <td><span class="total_price">Rs.{{ $sub_total }}</span></td>

                                            <tr>
                                                <td class="text-left">
                                                    <span class="subtotal_text">TOTAL</span>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <span class="total_price">Rs.{{ $total }}</span>
                                                </td>
                                                <input type="hidden" value="{{ $total }}" name="amount">

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">

                                        <a href="#" class="close" data-dismiss="alert"
                                            aria-label="close">×</a>

                                        <p>{{ Session::get('success') }}</p>

                                    </div>
                                @endif

                                <div class="accordion" id="accordionExample">

                                    <h2>Payment Method</h2>
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
