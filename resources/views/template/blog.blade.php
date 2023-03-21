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


        <!-- sidebar mobile menu & sidebar cart - start
   ================================================== -->
        <div class="sidebar-menu-wrapper">
            <div class="cart_sidebar">
                <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

                <ul class="cart_items_list ul_li_block mb_30 clearfix">
                    <li>
                        <div class="item_image">
                            <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">Yellow Blouse</h4>
                            <span class="item_price">$30.00</span>
                        </div>
                        <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                    </li>
                    <li>
                        <div class="item_image">
                            <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">Yellow Blouse</h4>
                            <span class="item_price">$30.00</span>
                        </div>
                        <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                    </li>
                    <li>
                        <div class="item_image">
                            <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">Yellow Blouse</h4>
                            <span class="item_price">$30.00</span>
                        </div>
                        <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                    </li>
                </ul>

                <ul class="total_price ul_li_block mb_30 clearfix">
                    <li>
                        <span>Subtotal:</span>
                        <span>$90</span>
                    </li>
                    <li>
                        <span>Vat 5%:</span>
                        <span>$4.5</span>
                    </li>
                    <li>
                        <span>Discount 20%:</span>
                        <span>- $18.9</span>
                    </li>
                    <li>
                        <span>Total:</span>
                        <span>$75.6</span>
                    </li>
                </ul>

                <ul class="btns_group ul_li_block clearfix">
                    <li><a href="shop_cart.html">View Cart</a></li>
                    <li><a href="shop_checkout.html">Checkout</a></li>
                </ul>
            </div>

            <div class="sidebar_mobile_menu">
                <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

                <div class="msb_widget brand_logo text-center">
                    <a href="index.html">
                        <img src="assets/images/logo/logo_25_1x.png" srcset="assets/images/logo/logo_25_2x.png 2x"
                            alt="logo_not_found">
                    </a>
                </div>

                <div class="msb_widget mobile_menu_list clearfix">
                    <h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
                    <ul class="ul_li_block clearfix">
                        <li class="active dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Home</a>
                            <ul class="ul_li_block dropdown-menu">
                                <li><a href="home_carparts.html">Carparts</a></li>
                                <li><a href="home_classic_ecommerce.html">Classic Ecommerce</a></li>
                                <li><a href="home_creative_onelook.html">Creative Onelook</a></li>
                                <li><a href="home_electronic.html">Electronic</a></li>
                                <li><a href="home_fashion.html">Fashion</a></li>
                                <li><a href="home_fashion_minimal.html">Fashion Minimal</a></li>
                                <li><a href="home_furniture.html">Furniture</a></li>
                                <li><a href="home_gadget.html">Gadget</a></li>
                                <li><a href="home_lookbook_creative.html">Lookbook Creative</a></li>
                                <li><a href="home_lookbook_slide.html">Lookbook Slide</a></li>
                                <li><a href="home_medical.html">Medical</a></li>
                                <li><a href="home_modern.html">Modern</a></li>
                                <li><a href="home_modern_minimal.html">Modern Minimal</a></li>
                                <li><a href="home_motorcycle.html">Motorcycle</a></li>
                                <li><a href="home_parallax_shop.html">Parallax Shop</a></li>
                                <li><a href="home_simple_shop.html">Simple Shop</a></li>
                                <li><a href="home_single_story_black.html">Single Story Black</a></li>
                                <li><a href="home_single_story_white.html">Single Story White</a></li>
                                <li><a href="home_sports.html">Sports</a></li>
                                <li><a href="home_supermarket.html">Supermarket</a></li>
                                <li><a href="home_watch.html">Watch</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown ul_li_block">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Carparts</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="carparts_shop.html">Shop Page</a></li>
                                        <li><a href="carparts_shop_grid.html">Shop Grid</a></li>
                                        <li><a href="carparts_shop_list.html">Shop List</a></li>
                                        <li><a href="carparts_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Classic Ecommerce</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="classic_ecommerce_shop.html">Shop Page</a></li>
                                        <li><a href="classic_ecommerce_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Electronic</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="electronic_shop.html">Shop Page</a></li>
                                        <li><a href="electronic_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Fashion</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="fashion_shop.html">Shop Page</a></li>
                                        <li><a href="fashion_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Fashion Minimal</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                                        <li><a href="fashion_minimal_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Fashion Minimal</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                                        <li><a href="fashion_minimal_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Furniture</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="furniture_shop.html">Shop Page</a></li>
                                        <li><a href="furniture_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Gadget</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="gadget_shop.html">Shop Page</a></li>
                                        <li><a href="gadget_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Medical</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="medical_shop.html">Shop Page</a></li>
                                        <li><a href="medical_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Modern Minimal</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="modern_minimal_shop.html">Shop Page</a></li>
                                        <li><a href="modern_minimal_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Modern</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="modern_shop.html">Shop Page</a></li>
                                        <li><a href="modern_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Motorcycle</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="motorcycle_shop_grid.html">Shop Grid</a></li>
                                        <li><a href="motorcycle_shop_list.html">Shop List</a></li>
                                        <li><a href="motorcycle_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Simple Shop</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="simple_shop.html">Shop Page</a></li>
                                        <li><a href="simple_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Sports</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="sports_shop.html">Shop Page</a></li>
                                        <li><a href="sports_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Lookbook</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="lookbook_creative_shop.html">Shop Page</a></li>
                                        <li><a href="lookbook_creative_shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Shop Other Pages</a>
                                    <ul class="dropdown-menu ul_li_block">
                                        <li><a href="#!"><del>Shop Page</del></a></li>
                                        <li><a href="shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Shop Inner Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop_cart.html">Shopping Cart</a></li>
                                        <li><a href="shop_checkout.html">Checkout Step 1</a></li>
                                        <li><a href="shop_checkout_step2.html">Checkout Step 2</a></li>
                                        <li><a href="shop_checkout_step3.html">Checkout Step 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">404 Page</a></li>
                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Blogs</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog Page</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Compare</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="compare_1.html">Compare V.1</a></li>
                                        <li><a href="compare_2.html">Compare V.2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Register</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="signup.html">Sign Up</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Conatct</a></li>
                    </ul>
                </div>

                <div class="user_info">
                    <h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i> User Info</h3>
                    <div class="profile_info clearfix">
                        <div class="user_thumbnail">
                            <img src="assets/images/meta/img_01.png" alt="thumbnail_not_found">
                        </div>
                        <div class="user_content">
                            <h4 class="user_name">Jone Doe</h4>
                            <span class="user_title">Seller</span>
                        </div>
                    </div>
                    <ul class="settings_options ul_li_block clearfix">
                        <li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
                        <li><a href="#!"><i class="fal fa-user-cog"></i> Settings</a></li>
                        <li><a href="#!"><i class="fal fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>

            <div class="overlay"></div>
        </div>
        <!-- sidebar mobile menu & sidebar cart - end
   ================================================== -->


        <!-- breadcrumb_section - start
   ================================================== -->
        <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix"
            data-background="assets/images/breadcrumb/bg_01.jpg">
            <div class="overlay" data-bg-color="#1d1d1d"></div>
            <div class="container">
                <h1 class="page_title text-white">About</h1>
                <ul class="breadcrumb_nav ul_li_center clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Pages</li>
                    <li>About Us</li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb_section - end
   ================================================== -->


        <!-- blog_section - start
   ================================================== -->
        <section class="blog_section sec_ptb_140 clearfix">
            <div class="container">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="blog_grid">
                            <a class="blog_image" href="blog_details.html">
                                <img src="assets/images/blog/main_blog/img_01.jpg" alt="image_not_found">
                            </a>
                            <div class="blog_content">
                                <span class="blog_post_time text-uppercase bg_default_red text-white"><i
                                        class="fal fa-calendar-alt mr-1"></i> SEPTEMBER 21, 2020</span>
                                <ul class="blog_category ul_li clearfix">
                                    <li><a href="#!">BACKPACK</a></li>
                                    <li><a href="#!">FASHIONLIFE</a></li>
                                    <li><a href="#!">STYLE</a></li>
                                </ul>
                                <h3 class="blog_title">
                                    <a href="#!">Traveling Solo Is Awesome</a>
                                </h3>
                                <p class="mb_30">
                                    Our place rule night were. Make, air great creepeth multiply herb evening saying
                                    beast very meat hath.Our place rule night were. Make, air great creepeth multiply
                                    herb evening saying beast very meat hath.
                                </p>
                                <a class="custom_btn bg_default_black text-uppercase" href="blog_details.html">Read
                                    More <i class="fal fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="blog_grid">
                            <a class="blog_image" href="blog_details.html">
                                <img src="assets/images/blog/main_blog/img_02.jpg" alt="image_not_found">
                            </a>
                            <div class="blog_content">
                                <span class="blog_post_time text-uppercase bg_default_red text-white"><i
                                        class="fal fa-calendar-alt mr-1"></i> SEPTEMBER 21, 2020</span>
                                <ul class="blog_category ul_li clearfix">
                                    <li><a href="#!">BACKPACK</a></li>
                                    <li><a href="#!">FASHIONLIFE</a></li>
                                    <li><a href="#!">STYLE</a></li>
                                </ul>
                                <h3 class="blog_title">
                                    <a href="#!">Traveling Solo Is Awesome</a>
                                </h3>
                                <p class="mb_30">
                                    Our place rule night were. Make, air great creepeth multiply herb evening saying
                                    beast very meat hath.Our place rule night were. Make, air great creepeth multiply
                                    herb evening saying beast very meat hath.
                                </p>
                                <a class="custom_btn bg_default_black text-uppercase" href="blog_details.html">Read
                                    More <i class="fal fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="blog_grid">
                            <a class="blog_image" href="blog_details.html">
                                <img src="assets/images/blog/main_blog/img_03.jpg" alt="image_not_found">
                            </a>
                            <div class="blog_content">
                                <span class="blog_post_time text-uppercase bg_default_red text-white"><i
                                        class="fal fa-calendar-alt mr-1"></i> SEPTEMBER 21, 2020</span>
                                <ul class="blog_category ul_li clearfix">
                                    <li><a href="#!">BACKPACK</a></li>
                                    <li><a href="#!">FASHIONLIFE</a></li>
                                    <li><a href="#!">STYLE</a></li>
                                </ul>
                                <h3 class="blog_title">
                                    <a href="#!">Traveling Solo Is Awesome</a>
                                </h3>
                                <p class="mb_30">
                                    Our place rule night were. Make, air great creepeth multiply herb evening saying
                                    beast very meat hath.Our place rule night were. Make, air great creepeth multiply
                                    herb evening saying beast very meat hath.
                                </p>
                                <a class="custom_btn bg_default_black text-uppercase" href="blog_details.html">Read
                                    More <i class="fal fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="blog_grid">
                            <a class="blog_image" href="blog_details.html">
                                <img src="assets/images/blog/main_blog/img_04.jpg" alt="image_not_found">
                            </a>
                            <div class="blog_content">
                                <span class="blog_post_time text-uppercase bg_default_red text-white"><i
                                        class="fal fa-calendar-alt mr-1"></i> SEPTEMBER 21, 2020</span>
                                <ul class="blog_category ul_li clearfix">
                                    <li><a href="#!">BACKPACK</a></li>
                                    <li><a href="#!">FASHIONLIFE</a></li>
                                    <li><a href="#!">STYLE</a></li>
                                </ul>
                                <h3 class="blog_title">
                                    <a href="#!">Traveling Solo Is Awesome</a>
                                </h3>
                                <p class="mb_30">
                                    Our place rule night were. Make, air great creepeth multiply herb evening saying
                                    beast very meat hath.Our place rule night were. Make, air great creepeth multiply
                                    herb evening saying beast very meat hath.
                                </p>
                                <a class="custom_btn bg_default_black text-uppercase" href="blog_details.html">Read
                                    More <i class="fal fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="blog_grid">
                            <a class="blog_image" href="blog_details.html">
                                <img src="assets/images/blog/main_blog/img_05.jpg" alt="image_not_found">
                            </a>
                            <div class="blog_content">
                                <span class="blog_post_time text-uppercase bg_default_red text-white"><i
                                        class="fal fa-calendar-alt mr-1"></i> SEPTEMBER 21, 2020</span>
                                <ul class="blog_category ul_li clearfix">
                                    <li><a href="#!">BACKPACK</a></li>
                                    <li><a href="#!">FASHIONLIFE</a></li>
                                    <li><a href="#!">STYLE</a></li>
                                </ul>
                                <h3 class="blog_title">
                                    <a href="#!">Traveling Solo Is Awesome</a>
                                </h3>
                                <p class="mb_30">
                                    Our place rule night were. Make, air great creepeth multiply herb evening saying
                                    beast very meat hath.Our place rule night were. Make, air great creepeth multiply
                                    herb evening saying beast very meat hath.
                                </p>
                                <a class="custom_btn bg_default_black text-uppercase" href="blog_details.html">Read
                                    More <i class="fal fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="blog_grid">
                            <a class="blog_image" href="blog_details.html">
                                <img src="assets/images/blog/main_blog/img_06.jpg" alt="image_not_found">
                            </a>
                            <div class="blog_content">
                                <span class="blog_post_time text-uppercase bg_default_red text-white"><i
                                        class="fal fa-calendar-alt mr-1"></i> SEPTEMBER 21, 2020</span>
                                <ul class="blog_category ul_li clearfix">
                                    <li><a href="#!">BACKPACK</a></li>
                                    <li><a href="#!">FASHIONLIFE</a></li>
                                    <li><a href="#!">STYLE</a></li>
                                </ul>
                                <h3 class="blog_title">
                                    <a href="#!">Traveling Solo Is Awesome</a>
                                </h3>
                                <p class="mb_30">
                                    Our place rule night were. Make, air great creepeth multiply herb evening saying
                                    beast very meat hath.Our place rule night were. Make, air great creepeth multiply
                                    herb evening saying beast very meat hath.
                                </p>
                                <a class="custom_btn bg_default_black text-uppercase" href="blog_details.html">Read
                                    More <i class="fal fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="pagination_nav ul_li_center text-uppercase clearfix">
                    <li><a href="#!">Prev</a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li><a href="#!">...</a></li>
                    <li><a href="#!">13</a></li>
                    <li><a href="#!">Next</a></li>
                </ul>
            </div>
        </section>
        <!-- blog_section - end
   ================================================== -->


    </main>
    <!-- main body - end
  ================================================== -->



</x-main-layout>
