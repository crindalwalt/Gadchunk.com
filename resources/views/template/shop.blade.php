<x-main-layout>
    <x-layouts.header :wishlists=$wishlists  />
    {{-- @dd($inventory_products[0]->inven_prod_images) --}}
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
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
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
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
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
        <div class="container maxw_1600">
            <div class="f2_breadcrumb_nav_wrap mt-0 sec_ptb_50">
                <ul class="ce_breadcrumb_nav ul_li clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Shop</li>
                    {{-- <li>Electronic</li>
						<li>Shop Page</li> --}}
                </ul>
            </div>
        </div>
        <!-- breadcrumb_section - end
   ================================================== -->


        <!-- trending_section - start
   ================================================== -->
        <section class="trending_section clearfix">
            <div class="container maxw_1600">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="electronic_trending_carousel position-relative" data-bg-color="#131315">
                            <div class="slideshow1_slider" data-slick='{"dots": false}'>
                              @foreach ($collections as $collection)
							  <div class="item">
								<div class="electronic_trending_item text-white">
									<div class="item_image">
										<img src="{{asset('storage/collections/'.$collection->banner_image)}}" width="400px" height="400px" alt="image_not_found">
									</div>
									<div class="item_content">
										<span class="item_price"><strong>{{$collection->discount_percentage}}</strong></span>
										<h3 class="item_title text-white">{{$collection->title}}</h3>
										<p>
											{{$collection->description}}
										</p>
										<a class="custom_btn btn_sm bg_electronic_blue add-cart"    data-route="{{ route('add-cart', $collection->id) }}" >Add To
											Cart</a>
									</div>
								</div>
							</div>

							  @endforeach
                            
                            </div>
                            <div class="carousel_nav">
                                <button type="button" class="left_arrow"><i class="fal fa-angle-left"></i></button>
                                <button type="button" class="right_arrow"><i
                                        class="fal fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
							<ul class="trending_products_list ul_li clearfix">
								<li>
									<div class="etp_small_item text-center">
										<a class="item_image" href="#!">
											<img src="assets/images/shop/electronic/img_38.png" alt="image_not_found">
										</a>
										<h4 class="item_title mb-0">Laptops</h4>
									</div>
								</li>
								<li>
									<div class="etp_small_item text-center">
										<a class="item_image" href="#!">
											<img src="assets/images/shop/electronic/img_39.png" alt="image_not_found">
										</a>
										<h4 class="item_title mb-0">Dekstop PCs</h4>
									</div>
								</li>
								<li>
									<div class="etp_small_item text-center">
										<a class="item_image" href="#!">
											<img src="assets/images/shop/electronic/img_40.png" alt="image_not_found">
										</a>
										<h4 class="item_title mb-0">Ultrabooks</h4>
									</div>
								</li>
								<li>
									<div class="etp_small_item text-center">
										<a class="item_image" href="#!">
											<img src="assets/images/shop/electronic/img_41.png" alt="image_not_found">
										</a>
										<h4 class="item_title mb-0">Mac Computers</h4>
									</div>
								</li>
							</ul>
						</div> --}}
                </div>
            </div>
        </section>
        <!-- trending_section - end
   ================================================== -->


        <!-- product_section - start
   ================================================== -->
        <section class="product_section sec_ptb_100 clearfix">
            <div class="container maxw_1600">
                <div class="row justify-content-lg-between">

                    <div class="col-lg-9 order-last">
                        <ul class="electronic_filter_bar ul_li mb_30">
                            {{-- <li>
                                <ul class="layout_btns nav ul_li clearfix" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#grid_layout"><i
                                                class="fas fa-th"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#list_layout"><i class="fas fa-bars"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="product_show option_select">
                                    <select>
                                        <option data-display="Show on page:">Select A Option</option>
                                        <option value="1" selected>Show on page: 18</option>
                                        <option value="2">Show on page: 20</option>
                                        <option value="3" disabled>Show on page: 22</option>
                                        <option value="4">Show on page: 24</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="shortby_select option_select">
                                    <select>
                                        <option data-display="Select:">Select A Option</option>
                                        <option value="1" selected>Popularity</option>
                                        <option value="2">Popularity</option>
                                        <option value="3" disabled>Popularity</option>
                                        <option value="4">Popularity</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <p class="result_text mb-0 d-flex align-items-center"><span
                                        class="active_page">1</span> of 3 <a class="next_btn" href="#!"><i
                                            class="fal fa-long-arrow-right"></i></a></p>
                            </li> --}}
                        </ul>

                        <div class="tab-content mb_50">
                            <div id="grid_layout" class="tab-pane active">
                                <ul class="electronic_product_columns ul_li has_4columns clearfix" id="result">
                                    @foreach ($inventory_products as $item)
									<a href="{{ route('product_detail', $item->product_id ) }}"
										style="text-decoration: none">
                                        <li>
                                            {{-- {{  '/product/'.$item->products->slug.'/'.$item->product_id }} --}}
                                                <div class="electronic_product_item">
                                                    {{-- <ul class="product_label ul_li clearfix">
														<li>-$30</li>
													</ul> --}}
                                                    <div class="item_image">
                                                        {{-- @dd($item) --}}

                                                        <img src="{{ asset('storage/inventory_images/' . $item->inven_prod_images[0]->product_image) }}"
                                                            alt="image_not_found">
                                                    </div>
                                                    <div class="item_content">
                                                        <span
                                                            class="item_name">{{ $item->products->category->name }}</span>
                                                        <h3 class="item_title">
                                                            <a href="#!">{{ $item->products->name }}</a>
                                                        </h3>
														<div class="d-flex ">
															<span class="item_price">Rs.{{ $item->discount_price }}</span>
														<span class="ml-4">
                                                            <i class="fal fa-shopping-cart bg_supermarket_red text-white p-2 mr-2 rounded  add-cart"
                                                                data-route="{{ route('add-cart', $item->id) }}"></i>
                                                            <i class="fal fa-heart bg_supermarket_red text-white p-2 rounded add-wishlist"
                                                                data-route="{{ route('add.wishlist', $item->id) }}"></i>
                                                        </span>
														</div>
                            
                                                    </div>


                                                </div>
											</li>
										</a>
                                    @endforeach

                                </ul>
                            </div>
                            <div id="list_layout" class="tab-pane fade">
                                <ul class="electronic_product_columns ul_li has_4columns clearfix">
                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_02.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_03.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_04.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_05.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_06.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_07.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_08.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_09.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_02.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_03.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_04.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="electronic_product_item">
                                            <ul class="product_label ul_li clearfix">
                                                <li>-$30</li>
                                            </ul>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_05.png"
                                                    alt="image_not_found">
                                            </div>
                                            <div class="item_content">
                                                <span class="item_name">Speakers</span>
                                                <h3 class="item_title">
                                                    <a href="#!">Wireless Audio System Multiroom 360</a>
                                                </h3>
                                                <span class="item_price">$685.00</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- <div class="abtn_wrap text-center mb_50">
                            <a href="#!" class="custom_btn btn_border border_electronic">Load more</a>
                        </div> --}}

                        {{-- <div class="advertisement_image">
                            <a href="#!">
                                <img src="assets/images/offer/electronic/img_04.jpg" alt="image_not_found">
                            </a>
                        </div> --}}
                    </div>

                    <div class="col-lg-3">
                        <aside class="electronic_sidebar sidebar_section">
                            {{-- <div class="sb_widget sb_collapse_category">
									<h3 class="sb_widget_title">All Categories</h3>
									<div id="sb_category_accordion" class="sb_category_accordion">
										<div class="card">
											<div class="card-header">
												<a data-toggle="collapse" href="#collapse_one">
													Wearable Technology (84)
												</a>
											</div>
											<div id="collapse_one" class="collapse show" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header">
												<a class="collapsed" data-toggle="collapse" href="#collapse_two">
													Android VR  (36)
												</a>
											</div>
											<div id="collapse_two" class="collapse" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header">
												<a class="collapsed" data-toggle="collapse" href="#collapse_three">
													iOS VR (8)
												</a>
											</div>
											<div id="collapse_three" class="collapse" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-header">
												<a class="collapsed" data-toggle="collapse" href="#collapse_four">
													Video Consoles (18)
												</a>
											</div>
											<div id="collapse_four" class="collapse" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-header">
												<a class="collapsed" data-toggle="collapse" href="#collapse_five">
													Accesories (31)
												</a>
											</div>
											<div id="collapse_five" class="collapse" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div> --}}
                            {{-- <h3 class="sb_widget_title text-uppercase">All Categories</h3> --}}
                            <div class="sb_widget sb_color_checkbox">
                                <h3 class="sb_widget_title text-uppercase">All Categories</h3>
                                @foreach ($categories as $cat)
                                {{-- <form action="#"> --}}
                                    <ul class="ul_li_block clearfix">
                                            <li>
                                                <div class="checkbox_item">
                                                    {{-- <input id="oculus_rift_checkbox.{{$cat->id}}" value="{{$cat->name}}" type="checkbox" data-type="{{$value->attribute_value}}" class="filter"> --}}
                                                    <label
                                                        for="oculus_rift_checkbox.{{$cat->id}}"><strong>{{$loop->iteration}} - </strong> {{ $cat->name }}</label>
                                                </div>
                                            </li>
                                    </ul>
                                {{-- </form> --}}
                                @endforeach
                            </div>

                            {{-- @foreach ($attributes as $attr)
                                <div class="sb_widget sb_color_checkbox">
                                    <h3 class="sb_widget_title text-uppercase">{{ $attr->attribute_name }}</h3>
                                    <form action="#">
                                        <ul class="ul_li_block clearfix">
                                            @foreach ($attr->prod_attribute_value as $value)
                                                <li>
                                                    <div class="checkbox_item">
                                                        <input id="oculus_rift_checkbox.{{$value->id}}" value="{{$value->attribute_value}}" type="checkbox" data-type="{{$value->attribute_value}}" class="filter">
                                                        <label
                                                            for="oculus_rift_checkbox.{{$value->id}}">{{ $value->attribute_value }}</label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </form>
                                </div>
                            @endforeach --}}

                            {{-- <div class="sb_widget sb_pricing_range">
                                <h3 class="sb_widget_title text-uppercase">Price Range</h3>
                                <form action="#">
                                    <div class="price-range-area clearfix">
                                        <div id="slider-range" class="slider-range"></div>
                                        <div class="price-text d-flex align-items-center">
                                            <input type="text" id="amount" readonly>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </aside>
                    </div>

                </div>
            </div>
        </section>
        <!-- product_section - end
   ================================================== -->


    </main>
    <!-- main body - end
  ================================================== -->
</x-main-layout>


