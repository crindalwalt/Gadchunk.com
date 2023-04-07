<x-main-layout>
    {{-- Selective header  --}}
    {{-- @dd($product->category) --}}
    <x-layouts.header :wishlists=$wishlists />
    {{-- @dd($product) --}}
    <!-- main body - start
  ================================================== -->
    <main>


        <!-- sidebar mobile menu & sidebar cart - start
   ================================================== -->
        {{-- <div class="sidebar-menu-wrapper">
            <div class="cart_sidebar">
                <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

                <ul class="cart_items_list ul_li_block mb_30 clearfix">
                    <li>
                        <div class="item_image">
                            <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">{{ $product->name }}hulalala</h4>
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
        </div> --}}
        <!-- sidebar mobile menu & sidebar cart - end
   ================================================== -->


        <!-- breadcrumb_section - start
   ================================================== -->
        <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix"
            data-background="assets/images/breadcrumb/bg_01.jpg">
            <div class="overlay" data-bg-color="#1d1d1d"></div>
            <div class="container">
                <h1 class="page_title text-white">Single Product</h1>
                <ul class="breadcrumb_nav ul_li_center clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Shop</li>
                    <li>Single Product</li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb_section - end
   ================================================== -->

        {{-- @dd($product->category->attributes) --}}

        <!-- details_section - start
   ================================================== -->
        <section class="details_section shop_details sec_ptb_140 clearfix">
            <div class="container">
                <div class="row mb_100 justify-content-lg-between justify-content-md-center">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="shop_details_image">
                            <div class="tab-content zoom-gallery">
                                <div id="tab_1" class="tab-pane active">
                                    <a class="popup_image zoom-image" data-image="assets/images/details/shop/img_01.jpg"
                                        href="assets/images/details/shop/img_01.jpg">
                                        <img src="{{ asset('storage/inventory_images/' . $product->images[0]->product_image) }}"
                                            alt="image_not_found">
                                    </a>

                                </div>

                                {{-- <div id="tab_2" class="tab-pane fade">
                                <img src=" {{ asset('storage/inventory_images/' . $product->images[0]->product_image) }}" alt="image_not_found">
                            </div> --}}

                            </div>

                            <ul class="nav ul_li clearfix" role="tablist">
                                @foreach ($product->images as $image)
                                    <li>
                                        <a class="active" data-toggle="tab" href="#tab_1">
                                            <img src=" {{ asset('storage/inventory_images/' . $product->images[0]->product_image) }}"
                                                alt="image_not_found">
                                        </a>
                                    </li>
                                @endforeach

                                {{-- <li>
                                    <a data-toggle="tab" href="#tab_2">
                                        <img src="assets/images/details/shop/img_03.jpg" alt="image_not_found">
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_3">
                                        <img src="assets/images/details/shop/img_04.jpg" alt="image_not_found">
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_4">
                                        <img src="assets/images/details/shop/img_05.jpg" alt="image_not_found">
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="shop_details_content">
                            <h2 class="item_title">{{ $product->name }}</h2>
                            <span class="item_price"></span>
                            <hr>
                            <div class="row mb_30 align-items-center justify-content-lg-between">
                                <div class="col-lg-5">
                                    <div class="item_brand d-flex align-items-center">
                                        <span class="brand_title">Category:</span>
                                        <span class="brand_image d-flex align-items-center justify-content-center"
                                            data-bg-color="#f7f7f7">
                                            {{ $product->category->name }}
                                            {{-- @dd($product->reviews[0]->star_rating) --}}

                                        </span>
                                    </div>
                                </div>

                                {{-- <div class="col-lg-7">
                                    <div class="rating_review_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>4 Review(s)</span>
                                        <button type="button" class="add_review_btn">Add Your Review</button>
                                    </div>
                                </div> --}}
                            </div>
                            <p class="mb-0">
                                {{ $product->description }}
                            </p>
                            <hr>
                            @foreach ($product->category->attributes as $attributes)
                                {{-- @dd($attributes) --}}
                                <div class=" d-flex item_size_list mb_30 clearfix">
                                    <h4 class="list_title mb_15 text-uppercase">{{ $attributes->attribute_name }}</h4>
                                    @foreach ($attributes->prod_attribute_value as $value)
                                        <ul class="ul_li clearfix">
                                            <li> {{ $value->attribute_value }}</li>
                                        </ul>
                                    @endforeach
                                    {{-- <li><a class="size_guide" href="#!"><i class="far fa-tape mr-1"></i> Size
                                    Guide</a></li> --}}
                                </div>
                            @endforeach
                            {{-- <div class="item_color_list mb_30 clearfix">
                                <h4 class="list_title mb_15 text-uppercase">Color</h4>
                                <ul class="ul_li clearfix">
                                    <li>
                                        <button type="button"><span><small data-bg-color="#cc7b4a"></small></span>
                                            Brown</button>
                                    </li>
                                    <li>
                                        <button type="button"><span><small data-bg-color="#b6b8ba"></small></span>
                                            Grey</button>
                                    </li>
                                    <li>
                                        <button type="button"><span><small data-bg-color="#dd3333"></small></span>
                                            Red</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_size_list mb_30 clearfix">
                                <h4 class="list_title mb_15 text-uppercase">Size</h4>
                                <ul class="ul_li clearfix">
                                    <li><button type="button">XL</button></li>
                                    <li><button type="button">L</button></li>
                                    <li><button type="button">M</button></li>
                                    <li><button type="button">SM</button></li>
                                    <li><a class="size_guide" href="#!"><i class="far fa-tape mr-1"></i> Size
                                            Guide</a></li>
                                </ul>
                            </div> --}}

                            <ul class="btns_group_1 ul_li mb_30 clearfix">
                                {{-- <li>
                                    <div class="quantity_input">
                                        <span class="input_number_decrement">–</span>
                                        <input class="input_number quantity"
                                            data-route="{{ route('cart.quantity', $product->id) }}"
                                            value="{{ $product->squantity ? $product->squantity : '0' }}" min="1"
                                            step="1" id="quantity{{ $product->id }}" data-decimals="0" required>
                                        <span class="input_number_increment">+</span>
                                    </div>
                                </li> --}}
                                <li>

                                    <a class="custom_btn btn_sm bg_electronic_blue add-wishlist"
                                        data-route="{{ route('add.wishlist', $product->id) }}">Add To
                                        Wishlist</a>

                                </li>
                                <li>
                                    {{-- <a class="custom_btn bg_black text-uppercase" href="#!"><i
                                            class="fal fa-shopping-bag mr-2"></i> Add To Cart</a> --}}
                                    <a class="custom_btn btn_sm bg_electronic_blue add-cart"
                                        data-route="{{ route('add-cart', $product->id) }}">Add To
                                        Cart</a>
                                </li>
                            </ul>

                            {{-- <ul class="btns_group_2 ul_li clearfix">
                                <li>
                                    <a href="#!">     <i class="fal fa-heart bg_supermarket_red text-white p-2 rounded add-wishlist"
                                        data-route="{{ route('add.wishlist', $product->id) }}"></i>  Add To Wishlist</a>

                                </li>
                                <li><a href="#!"><span><i class="fal fa-repeat"></i></span> Compare</a></li>
                            </ul> --}}

                            <hr>

                            {{-- <ul class="product_info ul_li_block clearfix">
                                <li><strong>SKU:</strong> U2012</li>
                                <li><strong>Categories:</strong> <a href="#!">Dress</a> <a
                                        href="#!">Handbag</a> <a href="#!">T-Shirts</a></li>
                                <li><strong>Tags:</strong> <a href="#!">Hot</a> <a href="#!">Women</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

                <div class="details_description_tab mb_100">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                        <h2>Reviews Section</h2>
                        @if (count($product->reviews) > 0)

                            @foreach ($product->reviews as $review)
                                <div class="row mb_50">
                                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                        <div class="content_wrap">
                                            <h4 class=" mt-4 mb-0">{{ $review->user->name }}</h4>
                                            @if ($review->stars_rating == 1)
                                                <span class="bi bi-star-fill text-warning"></span>
                                            @elseif ($review->stars_rating == 2)
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                            @elseif ($review->stars_rating == 3)
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                            @elseif ($review->stars_rating == 4)
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                            @elseif ($review->stars_rating == 5)
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                                <span class="bi bi-star-fill text-warning"></span>
                                            @endif
                                            <span>{{ $review->created_at->format('d/m/Y') }}
                                            </span>
                                            {{-- <h5 class="text-secondary m-0">{{ $review->stars_rating }}</h5> --}}
                                            {{-- <h4 class="text-secondary">{{ $review->subject }}</h4> --}}
                                            <p class="mb_30">
                                                {{ $review->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="shadow p-3 m-5 bg-white rounded">
                                <h3 class="text-center mb-3">No Rating Yet</h3>
                            </div>

                        @endif


                    </div>

                    {{-- <ul class="nav ul_li text-uppercase" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#description_tab">Product Description</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews_tab">Reviews</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#information_tab">Additional Information</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="description_tab" class="tab-pane active">
                            <div class="row mb_50">
                                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                    <div class="image_wrap">
                                        <img src="assets/images/details/shop/img_06.jpg" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content_wrap">
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>

                                        <h4 class="list_title">Pretium turpis et arcu</h4>
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>

                                        <h4 class="list_title">Unordered list</h4>
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.
                                        </p>

                                        <ul class="product_info ul_li_block clearfix">
                                            <li><strong>Color:</strong> Brown, Grey, Nude, Red</li>
                                            <li><strong>Size:</strong> L, M, S, XL, XS</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb_50">
                                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 order-last">
                                    <div class="image_wrap">
                                        <img src="assets/images/details/shop/img_07.jpg" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content_wrap">
                                        <h4 class="list_title">Paragraph text</h4>
                                        <p class="mb_15">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>

                                        <h4 class="list_title">Pretium turpis et arcu</h4>
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <span class="aware_info_icons">
                                <img src="assets/images/icons/aware_icons.png" alt="image_not_found">
                            </span>
                        </div>

                        <div id="reviews_tab" class="tab-pane fade">
                            <div class="row mb_50">

                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content_wrap">
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>

                                        <h4 class="list_title">Pretium turpis et arcu</h4>
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>

                                        <h4 class="list_title">Unordered list</h4>
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.
                                        </p>

                                        <ul class="product_info ul_li_block clearfix">
                                            <li><strong>Color:</strong> Brown, Grey, Nude, Red</li>
                                            <li><strong>Size:</strong> L, M, S, XL, XS</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="information_tab" class="tab-pane fade">
                            <div class="row mb_50">

                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content_wrap">
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>

                                        <h4 class="list_title">Pretium turpis et arcu</h4>
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>

                                        <h4 class="list_title">Unordered list</h4>
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.
                                        </p>

                                        <ul class="product_info ul_li_block clearfix">
                                            <li><strong>Color:</strong> Brown, Grey, Nude, Red</li>
                                            <li><strong>Size:</strong> L, M, S, XL, XS</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb_50">
                                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 order-last">
                                    <div class="image_wrap">
                                        <img src="assets/images/details/shop/img_07.jpg" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content_wrap">
                                        <h4 class="list_title">Paragraph text</h4>
                                        <p class="mb_15">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>
                                        <p class="mb_30">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>

                                        <h4 class="list_title">Pretium turpis et arcu</h4>
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <span class="aware_info_icons">
                                <img src="assets/images/icons/aware_icons.png" alt="image_not_found">
                            </span>
                        </div>
                    </div> --}}
                </div>

                <hr class="mt-0 mb_100">

                <div class="popular_products_area">
                    <h3 class="title_text mb_30">Popular Products</h3>
                    <div class="popular_products_carousel arrow_ycenter mt__30">
                        <div class="slideshow4_slider row" data-slick='{"dots": false}'>
                            @foreach ($inventory_products as $inventory)
                                <div class="col item">
                                    <div class="ecommerce_product_grid">
                                        <ul class="product_label ul_li clearfix">
                                            @if ($inventory->discount_price)
                                                <li class="bg_leafgreen">{{ $inventory->discount_price }}</li>
                                            @endif
                                        </ul>
                                        <div class="tab-content">
                                            <div id="ptab1_1" class="tab-pane fade active">
                                                <div class="item_image">
                                                    <img src="{{ asset('storage/inventory_images/' . $inventory->inven_prod_images[0]->product_image) }}"
                                                        alt="image_not_found">
                                                </div>
                                            </div>
                                            {{-- <div id="ptab1_2" class="tab-pane fade">
                                        <div class="item_image">
                                            <img src="assets/images/shop/classic_ecommerce/img_02.png"
                                                alt="image_not_found">
                                        </div>
                                    </div>
                                    <div id="ptab1_3" class="tab-pane fade">
                                        <div class="item_image">
                                            <img src="assets/images/shop/classic_ecommerce/img_03.png"
                                                alt="image_not_found">
                                        </div>
                                    </div> --}}
                                            <ul class="product_action_btns ul_li_center clearfix ">
                                                <li>
                                                    <a class="tooltips" data-placement="top" title="Add To Wishlist"
                                                        href="javascript:void"><i class="fal fa-heart add-wishlist"
                                                            data-route="{{ route('add.wishlist', $inventory->id) }}"></i></a>
                                                </li>
                                                <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                        href="javascript:void"><i
                                                            class="fal fa-shopping-basket add-cart "
                                                            data-route="{{ route('add-cart', $inventory->id) }}"></i></a>
                                                </li>
                                                {{-- <li><a class="tooltips" data-placement="top" title="Quick View"
                                                href="#!" data-toggle="modal"
                                                data-target="#quickview_modal"><i class="fal fa-search"></i></a>
                                        </li> --}}
                                            </ul>
                                        </div>
                                        <div class="item_content">
                                            <a href="{{ route('product_detail', $inventory->products->id) }}"
                                                style="text-decoration: none">
                                                <h3 class="item_title">
                                                    {{ $inventory->products->name }}
                                                </h3>
                                                <span class="item_price"><strong>Rs.
                                                        {{ $inventory->retail_price }}</strong></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{--
                            <div class="col item">
                                <div class="ecommerce_product_grid">
                                    <ul class="product_label ul_li clearfix">
                                        <li class="bg_leafgreen">New</li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="ptab2_1" class="tab-pane fade active">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_02.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab2_2" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_03.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab2_3" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_04.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist"
                                                    href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View"
                                                    href="#!" data-toggle="modal"
                                                    data-target="#quickview_modal"><i class="fal fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Rag & Bone Beck Coat</a>
                                        </h3>
                                        <ul class="product_color ul_li nav clearfix">
                                            <li class="active"><a class="pbg_brown" data-toggle="tab"
                                                    href="#ptab1_1"></a></li>
                                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab2_2"></a></li>
                                            <li><a class="pbg_gray" data-toggle="tab" href="#ptab2_3"></a></li>
                                        </ul>
                                        <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col item">
                                <div class="ecommerce_product_grid">
                                    <div class="tab-content">
                                        <div id="ptab3_1" class="tab-pane fade active">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_03.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab3_2" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_04.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab3_3" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_05.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist"
                                                    href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View"
                                                    href="#!" data-toggle="modal"
                                                    data-target="#quickview_modal"><i class="fal fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Rag & Bone Beck Coat</a>
                                        </h3>
                                        <ul class="product_color ul_li nav clearfix">
                                            <li class="active"><a class="pbg_brown" data-toggle="tab"
                                                    href="#ptab3_1"></a></li>
                                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab3_2"></a></li>
                                            <li><a class="pbg_gray" data-toggle="tab" href="#ptab3_3"></a></li>
                                        </ul>
                                        <span class="item_price"><strong>$25.00</strong></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col item">
                                <div class="ecommerce_product_grid">
                                    <ul class="product_label ul_li clearfix">
                                        <li class="bg_leafgreen">Hot</li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="ptab4_1" class="tab-pane fade active">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_04.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab4_2" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_05.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab4_3" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_06.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist"
                                                    href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View"
                                                    href="#!" data-toggle="modal"
                                                    data-target="#quickview_modal"><i class="fal fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Rag & Bone Beck Coat</a>
                                        </h3>
                                        <ul class="product_color ul_li nav clearfix">
                                            <li class="active"><a class="pbg_brown" data-toggle="tab"
                                                    href="#ptab4_1"></a></li>
                                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab4_2"></a></li>
                                            <li><a class="pbg_gray" data-toggle="tab" href="#ptab4_3"></a></li>
                                        </ul>
                                        <span class="item_price"><strong>$15.00</strong></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col item">
                                <div class="ecommerce_product_grid">
                                    <div class="tab-content">
                                        <div id="ptab5_1" class="tab-pane fade active">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_05.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab5_2" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_06.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab5_3" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_07.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist"
                                                    href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View"
                                                    href="#!" data-toggle="modal"
                                                    data-target="#quickview_modal"><i class="fal fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Rag & Bone Beck Coat</a>
                                        </h3>
                                        <ul class="product_color ul_li nav clearfix">
                                            <li class="active"><a class="pbg_brown" data-toggle="tab"
                                                    href="#ptab5_1"></a></li>
                                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab5_2"></a>
                                            </li>
                                            <li><a class="pbg_gray" data-toggle="tab" href="#ptab5_3"></a></li>
                                        </ul>
                                        <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col item">
                                <div class="ecommerce_product_grid">
                                    <div class="tab-content">
                                        <div id="ptab6_1" class="tab-pane fade active">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_06.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab6_2" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_07.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab6_3" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_08.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist"
                                                    href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View"
                                                    href="#!" data-toggle="modal"
                                                    data-target="#quickview_modal"><i class="fal fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Rag & Bone Beck Coat</a>
                                        </h3>
                                        <ul class="product_color ul_li nav clearfix">
                                            <li class="active"><a class="pbg_brown" data-toggle="tab"
                                                    href="#ptab6_1"></a></li>
                                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab6_2"></a>
                                            </li>
                                            <li><a class="pbg_gray" data-toggle="tab" href="#ptab6_3"></a></li>
                                        </ul>
                                        <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col item">
                                <div class="ecommerce_product_grid">
                                    <div class="tab-content">
                                        <div id="ptab7_1" class="tab-pane fade active">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_07.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab7_2" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_08.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab7_3" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_09.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist"
                                                    href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View"
                                                    href="#!" data-toggle="modal"
                                                    data-target="#quickview_modal"><i class="fal fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Rag & Bone Beck Coat</a>
                                        </h3>
                                        <ul class="product_color ul_li nav clearfix">
                                            <li class="active"><a class="pbg_brown" data-toggle="tab"
                                                    href="#ptab7_1"></a></li>
                                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab7_2"></a>
                                            </li>
                                            <li><a class="pbg_gray" data-toggle="tab" href="#ptab7_3"></a></li>
                                        </ul>
                                        <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col item">
                                <div class="ecommerce_product_grid">
                                    <div class="tab-content">
                                        <div id="ptab8_1" class="tab-pane fade active">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_08.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab8_2" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_09.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <div id="ptab8_3" class="tab-pane fade">
                                            <div class="item_image">
                                                <img src="assets/images/shop/classic_ecommerce/img_10.png"
                                                    alt="image_not_found">
                                            </div>
                                        </div>
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist"
                                                    href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View"
                                                    href="#!" data-toggle="modal"
                                                    data-target="#quickview_modal"><i class="fal fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Rag & Bone Beck Coat</a>
                                        </h3>
                                        <ul class="product_color ul_li nav clearfix">
                                            <li class="active"><a class="pbg_brown" data-toggle="tab"
                                                    href="#ptab8_1"></a></li>
                                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab8_2"></a>
                                            </li>
                                            <li><a class="pbg_gray" data-toggle="tab" href="#ptab8_3"></a></li>
                                        </ul>
                                        <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="ss4_left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="ss4_right_arrow"><i
                                    class="fal fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- details_section - end
   ================================================== -->



    </main>
    <!-- main body - end
  ================================================== -->




</x-main-layout>
