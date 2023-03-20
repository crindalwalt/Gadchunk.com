<x-main-layout>
    {{-- Selective header  --}}
    {{-- @dd($products->all()); --}}

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
                                    <button type="button" class="search_btn" data-toggle="collapse"
                                        data-target="#search_body_collapse" aria-expanded="false"
                                        aria-controls="search_body_collapse">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </li>
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
            data-background="{{ asset('assets/images/breadcrumb/bg_01.jpg') }}">
            <div class="overlay" data-bg-color="#1d1d1d"></div>
            <div class="container">
                <h1 class="page_title text-white">Cart Page</h1>
                <ul class="breadcrumb_nav ul_li_center clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Shop</li>
                    <li>Shopping Cart</li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb_section - end
   ================================================== -->


        <!-- cart_section - start
   ================================================== -->
        <section class="cart_section sec_ptb_140 clearfix">
            <div class="container">

                <div class="cart_table mb_50">
                    <table class="table">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products->count() > 0)
                               @foreach ($products as $item)
                               <tr  id="productremove{{ $item->id }}">
                                <td>
                                    <div class="cart_product">
                                        <div class="item_image">
                                            <img src="" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">{{$item->products->name}}</h4>
                                            <span class="item_type">{{$item->products->category->name}}</span>
                                        </div>
                                        <button type="button" class="remove_btn " id="remove-product"
                                        data-route="{{ route('cart.remove', $item->id) }}"
                                        data-remove="productremove{{ $item->id }}">
                                            <i class="fal fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <span class="price_text">Rs.{{$item->discount_price}}</span>
                                </td>
                                <td>
                                    <div class="quantity_input">
                                            <span class="input_number_decrement">–</span>
                                            <input  class="input_number quantity"
                                            data-route="{{ route('cart.quantity', $item->id) }}"
                                            value="{{ $item->squantity ? $item->squantity : '0' }}"
                                            min="1" step="1"
                                            id="quantity{{ $item->id }}" data-decimals="0" required>                                            
                                            <span class="input_number_increment">+</span>
                                    </div>
                                </td>
                                <td> Rs.<span class="total_price">{{$total}}</span></td>
                            </tr>
                               @endforeach
                            @else
                                <div class="text-center">
                                    <h3 class="text-danger">Cart is empty</h3>
                                </div>
                            @endif

                        </tbody>
                    </table>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="cart_update_btn">
                        <a href="{{route('shop')}}"><button type="button"  class="custom_btn bg_secondary text-uppercase">Back to Shop</button>
                        </a>
                    </div>
                </div>
                {{-- <div class="coupon_wrap mb_50">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="coupon_form">
                                <div class="form_item mb-0">
                                    <input type="text" class="coupon" placeholder="Coupon Code">
                                </div>
                                <button type="submit" class="custom_btn bg_danger text-uppercase">Apply
                                    Coupon</button>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="cart_update_btn">
                                <button type="button" class="custom_btn bg_secondary text-uppercase">Update
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row justify-content-lg-end">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="cart_pricing_table pt-0 text-uppercase" data-bg-color="#f2f3f5">
                            <h3 class="table_title text-center" data-bg-color="#ededed">Cart Total</h3>
                            <ul class="ul_li_block clearfix">
                                <li><span>Subtotal</span> <span>Rs. {{$sub_total}}</span></li>
                                <li><span>Discount</span> <span>Rs. {{$discount}}</span></li>
                                <li><span>Total</span> <span class="total_price">Rs. {{$total}}</span></li>
                            </ul>
                            <a href="{{ route('checkout') }}" class="custom_btn bg_success"><button class="text-white">Proceed to Checkout</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- cart_section - end
   ================================================== -->


    </main>
    <!-- main body - end
  ================================================== -->

</x-main-layout>
