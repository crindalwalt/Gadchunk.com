<div>
  {{-- @dd($categories) --}}

    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop bg_supermarket_red">
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
    <header class="header_section supermarket_header bg-white clearfix">
        <div class="header_top text-white clearfix">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-5">
                        <p class="welcome_text mb-0">Welcome to Worldwide Online marketplace Store</p>
                    </div>

                    <div class="col-lg-7">
                        <ul class="info_list ul_li_right clearfix">
                            <li><a href="#!"><i class="fal fa-map-marker-alt"></i> Store Locator</a></li>
                            <li><a href="#!"><i class="fal fa-truck"></i> Track Your Order</a></li>
                            @if(Auth::check())
                            <li> <strong>{{Auth::user()->name}}</strong> Login!</li>
                            @else
                            <li><a href="{{route('login')}}"> Login</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            @endif

                            {{-- <li>
                <form action="#">
                  <div class="currency_select option_select mb-0">
                    <select>
                      <option value="USD" selected>US Dollars</option>
                      <option value="EUR">Euro</option>
                      <option value="GBP">UK Pounds</option>
                    </select>
                  </div>
                </form>
              </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_middle clearfix">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-3">
                        <div class="brand_logo">
                            <a class="brand_link" href="/">
                                <img src="assets/images/logo/logo_18_1x.png"
                                    srcset="assets/images/logo/logo_18_2x.png 2x" alt="logo_not_found">
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
                                        <span class="btn_badge">0</span>
                                    </button>
                                </li>
                                <li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{route('search')}}" method="POST">
                          @csrf
                            <div class="medical_search_bar">
                                <div class="form_item">
                                    <input type="text" name="search" placeholder="search here...">
                                </div>
                                <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3">
                        <div class="supermarket_header_btns clearfix">
                            <ul class="action_btns_group ul_li_right clearfix">
                                <li>
                                    <div class="dropdown show">
                                        <a class="btn btn-transparent dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Account Details
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                            <a class="dropdown-item" href="#">Setting</a>
                                            <hr class="m-0">
                                            <form action="{{ route('logout', Auth::check() ? Auth::user()->id : '0' ) }}" method="post">
                                                @csrf
                                                <button class="dropdown-item btn btn-primary">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button type="button">
                                        <span>Need</span>
                                        <strong>Help?</strong>
                                    </button>
                                </li>

                                <li>
                                    <a href="{{ route('cart') }}">

                                        <button type="button" class="cart_btn">
                                            <i class="fal fa-shopping-bag"></i>
                                            <span class="btn_badge"
                                                id="cart-count">


                                                {{-- @if(Session::get('cart'))
                                                {{count(Session::get('cart'))}}
                                                @else
                                                  0
                                                @endif

                                              </span> --}}

                                                {{-- @if(count(Session::get('cart'))>0 )
                                                {{ count(Session::get('cart')) }}
                                                @else
                                                0
                                                @endif --}}
                                                0
                                            </span>

                                        </button>
                                    </a>
                                    <a href="{{ route('wishlist') }}">

                                        <button type="button" class="cart_btn ml-2">
                                            <i class="fal fa-heart"></i>
                                            <span class="btn_badge" id="wishlist-count">0</span>
                                        </button>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_bottom clearfix">
            <div class="container_fluid">
                <nav class="main_menu bg_supermarket_red clearfix">
                    <ul class="ul_li clearfix">
                        <li>
                            <a href="/">
                                <button
                                    class="alldepartments_btn bg_white text-dark text-uppercase font-weight-bold border"
                                    type="button">
                                    Home
                                </button>
                            </a>
                        </li>
                        <li><a href="{{ route('shop') }}">Shop</a></li>
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                        {{-- <li class="menu_item_has_child ">
              <a href="#!">Home</a>
              <div class="mega_menu text-center">
                <div class="background" data-bg-color="#ffffff">
                  <div class="container">
                    <ul class="home_pages ul_li clearfix">
                      <li>
                        <a href="home_carparts.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/carparts.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Car Parts</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_classic_ecommerce.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/classic_ecommarce.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Classic Ecommerce</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_creative_onelook.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/creative_onelook.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Creative Onelook</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_electronic.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/electronic.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Electronic</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_fashion.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/fashion.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Fashion</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_fashion_minimal.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/fashion_minimal.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Fashion Minimal</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_furniture.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/furniture.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Furniture</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_gadget.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/gadget.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Gadget</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_lookbook_creative.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/lookbook_creative.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Lookbook Creative</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_lookbook_slide.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/lookbook_slide.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Lookbook Slide</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_medical.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/medical.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Medical</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_modern.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/modern.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Modern</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_modern_minimal.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/modern_minimal.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Modern Minimal</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_motorcycle.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/motorcycle.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Motorcycle</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_parallax_shop.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/parallax_shop.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Parallax Shop</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_simple_shop.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/simple_shop.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Simple Shop</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_single_story_black.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/single_story_black.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Single Story Black</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_single_story_white.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/single_story_white.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Single Story White</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_sports.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/sports.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Sports Shop</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_supermarket.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/supermarket.png" alt="image_not_found">
                          </span>
                          <span class="item_title">Supermarket</span>
                        </a>
                      </li>
                      <li>
                        <a href="home_watch.html">
                          <span class="item_image">
                            <img src="assets/images/home_pages/watch.png" alt="image_not_found">
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
                            <li><a href="carparts_shop_grid.html">Shop Grid</a></li>
                            <li><a href="carparts_shop_list.html">Shop List</a></li>
                            <li><a href="carparts_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Classic Ecommerce</h3>
                          <ul class="ul_li_block">
                            <li><a href="classic_ecommerce_shop.html">Shop Page</a></li>
                            <li><a href="classic_ecommerce_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Electronic</h3>
                          <ul class="ul_li_block">
                            <li><a href="electronic_shop.html">Shop Page</a></li>
                            <li><a href="electronic_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Fashion</h3>
                          <ul class="ul_li_block">
                            <li><a href="fashion_shop.html">Shop Page</a></li>
                            <li><a href="fashion_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="page_links">
                          <h3 class="title_text">Fashion Minimal</h3>
                          <ul class="ul_li_block">
                            <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                            <li><a href="fashion_minimal_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Fashion Minimal</h3>
                          <ul class="ul_li_block">
                            <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                            <li><a href="fashion_minimal_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Furniture</h3>
                          <ul class="ul_li_block">
                            <li><a href="furniture_shop.html">Shop Page</a></li>
                            <li><a href="furniture_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Gadget</h3>
                          <ul class="ul_li_block">
                            <li><a href="gadget_shop.html">Shop Page</a></li>
                            <li><a href="gadget_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="page_links">
                          <h3 class="title_text">Medical</h3>
                          <ul class="ul_li_block">
                            <li><a href="medical_shop.html">Shop Page</a></li>
                            <li><a href="medical_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Modern Minimal</h3>
                          <ul class="ul_li_block">
                            <li><a href="modern_minimal_shop.html">Shop Page</a></li>
                            <li><a href="modern_minimal_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Modern</h3>
                          <ul class="ul_li_block">
                            <li><a href="modern_shop.html">Shop Page</a></li>
                            <li><a href="modern_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Motorcycle</h3>
                          <ul class="ul_li_block">
                            <li><a href="motorcycle_shop_grid.html">Shop Grid</a></li>
                            <li><a href="motorcycle_shop_list.html">Shop List</a></li>
                            <li><a href="motorcycle_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="page_links">
                          <h3 class="title_text">Simple Shop</h3>
                          <ul class="ul_li_block">
                            <li><a href="simple_shop.html">Shop Page</a></li>
                            <li><a href="simple_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Sports</h3>
                          <ul class="ul_li_block">
                            <li><a href="sports_shop.html">Shop Page</a></li>
                            <li><a href="sports_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Lookbook</h3>
                          <ul class="ul_li_block">
                            <li><a href="lookbook_creative_shop.html">Shop Page</a></li>
                            <li><a href="lookbook_creative_shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>

                        <div class="page_links">
                          <h3 class="title_text">Shop Other Pages</h3>
                          <ul class="ul_li_block">
                            <li><a href="#!"><del>Shop Page</del></a></li>
                            <li><a href="shop_details.html">Shop Details</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li> --}}
                        <li class="menu_item_has_child">
                            <a href="#!">Pages</a>
                            <ul class="submenu">
                                <li class="menu_item_has_child">
                                    <a href="#!">Site pages</a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('cart') }}">Shopping Cart</a></li>
                                        <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('error') }}">404 Page</a></li>
                                {{-- <li class="menu_item_has_child">
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
                </li> --}}
                            </ul>
                        </li>


                    </ul>
                </nav>
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
