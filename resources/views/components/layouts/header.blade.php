<div>
    <!-- pre loader area start -->
    <div id="loading">
    <div id="loading-center">
       <div id="loading-center-absolute">
          <!-- loading content here -->
          <div class="tp-preloader-content">
             <div class="tp-preloader-logo">
                <div class="tp-preloader-circle">
                   <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                      <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                  </svg>
                </div>
                <a href="/">
                    <img class="my-4" src="{{ asset('assets/img/logo/Gadchunk-logo.png') }}" width="95%"
                        alt="logo">
                </a>
            </div>
             <h6 class="tp-preloader-title">GADCHUNK</h6>
             <p class="tp-preloader-subtitle">Loading...</p>
          </div>
       </div>
    </div>
 </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area offcanvas__radius">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn offcanvas-close-btn">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="/">
                            <img src="{{ asset('assets/img/logo/Gadchunk-logo.png') }}" width="40%" height="40%"
                                alt="logo">
                        </a>
                    </div>
                </div>
                <div class="offcanvas__category pb-40">
                    <button class="tp-offcanvas-category-toggle">
                        <i class="fa-solid fa-bars"></i>
                        All Categories
                    </button>
                    <div class="tp-category-mobile-menu">

                    </div>
                </div>
                <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

                <div class="offcanvas__contact align-items-center d-none">
                    <div class="offcanvas__contact-icon mr-20">
                        <span>
                            <img src="assets/img/icon/contact.png" alt="">
                        </span>
                    </div>
                    <div class="offcanvas__contact-content">
                        <h3 class="offcanvas__contact-title">
                            <a href="tel:098-852-987">phono</a>
                        </h3>
                    </div>
                </div>
                <div class="offcanvas__btn">
                    <a href="{{ route('contact') }}" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
                </div>
            </div>
            <div class="offcanvas__bottom">
                <div class="offcanvas__footer d-flex align-items-center justify-content-between">
                    <div class="offcanvas__currency-wrapper currency">
                        <span class="offcanvas__currency-selected-currency tp-currency-toggle"
                            id="tp-offcanvas-currency-toggle">Currency : USD</span>
                        <ul class="offcanvas__currency-list tp-currency-list">
                            <li>USD</li>
                            <li>ERU</li>
                            <li>BDT </li>
                            <li>INR</li>
                        </ul>
                    </div>
                    <div class="offcanvas__select language">
                        <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
                            <div class="offcanvas__lang-img mr-15">
                                <img src="assets/img/icon/language-flag.png" alt="">
                            </div>
                            <div class="offcanvas__lang-wrapper">
                                <span class="offcanvas__lang-selected-lang tp-lang-toggle"
                                    id="tp-offcanvas-lang-toggle">English</span>
                                <ul class="offcanvas__lang-list tp-lang-list">
                                    <li>Spanish</li>
                                    <li>Portugese</li>
                                    <li>American</li>
                                    <li>Canada</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <!-- mobile menu area start -->
    <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
        <div class="container">
            <div class="row row-cols-5">
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="{{ route('shop') }}" class="tp-mobile-item-btn">
                            {{-- <i class="flaticon-store"></i> --}}
                            <i class="fa-solid fa-store"></i>
                            <span>Store</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <button class="tp-mobile-item-btn tp-search-open-btn">
                            {{-- <i class="flaticon-search-1"></i> --}}
                            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                            <span>Search</span>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="{{ route('wishlist') }}" class="tp-mobile-item-btn">
                            {{-- <i class="flaticon-love"></i> --}}
                            <i class="fa-solid fa-heart"></i>
                            <span>Wishlist</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="{{ route('user.profile') }}" class="tp-mobile-item-btn">
                            {{-- <i class="flaticon-user"></i> --}}
                            <i class="fa-solid fa-user"></i>
                            <span>Account</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                            {{-- <i class="flaticon-menu-1"></i> --}}
                            <i class="fa-solid fa-bars"></i>
                            <span>Menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->

    <!-- search area start -->
    <section class="tp-search-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-search-form">
                        <div class="tp-search-close text-center mb-20">
                            <button class="tp-search-close-btn tp-search-close-btn"></button>
                        </div>

                        <form action="{{ route('search') }}" method="POST">
                            @csrf
                            <div class="tp-search-input mb-10">
                                <input type="text" name="search" placeholder="search here by name...">
                                <button type="submit"><i class="flaticon-search-1"></i></button>
                            </div>
                            {{-- <div class="tp-search-category">
                                <span>Search by : </span>
                                <a href="index.html#">Men, </a>
                                <a href="index.html#">Women, </a>
                                <a href="index.html#">Children, </a>
                                <a href="index.html#">Shirt, </a>
                                <a href="index.html#">Demin</a>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- search area end -->

    <!-- cart mini area start -->
    {{-- <div class="cartmini__area tp-all-font-roboto">
        <div class="cartmini__wrapper d-flex justify-content-between flex-column">
            <div class="cartmini__top-wrapper">
                <div class="cartmini__top p-relative">
                    <div class="cartmini__top-title">
                        <h4>Shopping cart</h4>
                    </div>
                    <div class="cartmini__close">
                        <button type="button" class="cartmini__close-btn cartmini-close-btn"><i
                                class="fal fa-times"></i></button>
                    </div>
                </div>
                <div class="cartmini__shipping">
                    <p> Free Shipping for all orders over <span>$50</span></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                @if (!$cartitems->isEmpty())
                    @foreach ($cartitems as $item)
                        <div class="cartmini__widget" id="productremove{{ $item->id }}">
                            <div class="cartmini__widget-item">
                                <div class="cartmini__thumb">
                                    <a href="{{ route('product_detail', $item->id) }}">
                                        <img src="assets/img/product/product-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="cartmini__content">
                                    <h5 class="cartmini__title"><a
                                            href="{{ route('product_detail', $item->id) }}">{{ $item->name }}</a>
                                    </h5>
                                    <div class="cartmini__price-wrapper">
                                        <span class="cartmini__price">
                                            {{ $item->prod_inventory->retail_price }}
                                        </span>
                                        <span class="cartmini__quantity">x1</span>
                                    </div>
                                </div>
                                <a href="javascript:void(0)"data-route="{{ route('cart.remove', $item->id) }}"
                                    data-remove="productremove{{ $item->id }}" id="remove-product"
                                    class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
                            </div>
                        </div>
                        <!-- for wp -->
                    @endforeach
                    <div class="cartmini__checkout">
                        <div class="cartmini__checkout-title mb-30">
                            <h4>Subtotal:</h4>
                            <span>$113.00</span>
                        </div>
                        <div class="cartmini__checkout-btn">
                            <a href="{{ route('cart') }}" class="tp-btn mb-10 w-100"> view cart</a>
                        </div>
                    </div>
                @else
                    <!-- if no item in cart -->
                    <div class="cartmini__empty text-center ">
                        <img src="assets/img/product/cartmini/empty-cart.png" alt="">
                        <p>Your Cart is empty</p>
                        <a href="{{ route('shop') }}" class="tp-btn">Go to Shop</a>
                    </div>
                @endif

            </div>

        </div>
    </div> --}}
    <!-- cart mini area end -->

    <!-- header area start -->
    <header>
        <div class="tp-header-area p-relative z-index-11">
            <!-- header top start  -->
            <div class="tp-header-top black-bg p-relative z-index-1 d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="tp-header-welcome d-flex align-items-center">
                                <span>
                                    <svg width="22" height="19" viewBox="0 0 22 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6364 1H1V12.8182H14.6364V1Z" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6364 5.54545H18.2727L21 8.27273V12.8182H14.6364V5.54545Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M5.0909 17.3636C6.3461 17.3636 7.36363 16.3461 7.36363 15.0909C7.36363 13.8357 6.3461 12.8182 5.0909 12.8182C3.83571 12.8182 2.81818 13.8357 2.81818 15.0909C2.81818 16.3461 3.83571 17.3636 5.0909 17.3636Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16.9091 17.3636C18.1643 17.3636 19.1818 16.3461 19.1818 15.0909C19.1818 13.8357 18.1643 12.8182 16.9091 12.8182C15.6539 12.8182 14.6364 13.8357 14.6364 15.0909C14.6364 16.3461 15.6539 17.3636 16.9091 17.3636Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <p>Welcome to Online marketplace Store</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tp-header-top-right d-flex align-items-center justify-content-end">
                                <div class="tp-header-top-menu d-flex align-items-center justify-content-end">
                                    <div class="tp-header-top-menu-item ">
                                        <span><a href="{{ route('order_list') }}"><i class="fal fa-truck"></i> Track
                                                Your Order</a>
                                        </span>
                                        @if (Auth::check())
                                            <span>
                                                <a href="{{ route('logout') }}"><span
                                                        class="dropdown-item btn btn-primary">Logout</span> </a>
                                            </span>
                                            {{-- <span> <a href="{{ route('user.profile') }}"><i
                                                        class="fal fa-user"></i><strong>{{ Auth::user()->name }}</strong></a></span> --}}
                                        @else
                                            <span><a href="{{ route('login') }}"> Login</a></span>
                                            <span><a href="{{ route('register') }}">Register</a></span>
                                        @endif
                                    </div>
                                    {{-- <div class="tp-header-top-menu-item tp-header-currency">
                            <span class="tp-header-currency-toggle" id="tp-header-currency-toggle">USD</span>
                            <ul>
                               <li>
                                  <a href="index.html#">EUR</a>
                               </li>
                               <li>
                                  <a href="index.html#">CHF</a>
                               </li>
                               <li>
                                  <a href="index.html#">GBP</a>
                               </li>
                               <li>
                                  <a href="index.html#">KWD</a>
                               </li>
                            </ul>
                         </div>
                         <div class="tp-header-top-menu-item tp-header-setting">
                            <span class="tp-header-setting-toggle" id="tp-header-setting-toggle">Setting</span>
                            <ul>
                               <li>
                                  <a href="profile.html">My Profile</a>
                               </li>
                               <li>
                                  <a href="wishlist.html">Wishlist</a>
                               </li>
                               <li>
                                  <a href="cart.html">Cart</a>
                               </li>
                               <li>
                                  <a href="login.html">Logout</a>
                               </li>
                            </ul>
                         </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header main start -->
            <div class="tp-header-main tp-header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                            {{-- <div class="logo"> --}}
                            <a href="/">
                                <img src="{{ asset('assets/img/logo/Gadchunk-logo.png') }}" width="70%"
                                    alt="logo">
                            </a>
                            {{-- </div> --}}
                        </div>
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="tp-header-search pl-70">
                                <div class="tp-header-search-wrapper d-flex align-items-center">
                                    <form action="{{ route('search') }}" method="POST">
                                        @csrf
                                        <div class="tp-header-search-box w-100">
                                            <input type="text" name="search"
                                                placeholder="search here by name...">
                                        </div>
                                        <div class="tp-header-search-btn">
                                            <button type="submit">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M19 19L14.65 14.65" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                            <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                                <div class="tp-header-login d-none d-lg-block">
                                    <a href="{{ route('user.profile') }}" class="d-flex align-items-center">
                                        <div class="tp-header-login-icon">
                                            <span>
                                                @if (Auth::check())
                                                    @if (Auth::user()->profile_image)
                                                        <img src="{{ asset('storage/avatar_images/' . Auth::user()->profile_image) }}"
                                                            alt="avatar" class="rounded-circle img-fluid"
                                                            style="width: 35px;">
                                                    @else
                                                        <svg width="20" height="40" viewBox="0 0 17 21"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="8.57894" cy="5.77803" r="4.77803"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    @endif
                                                @else
                                                    <svg width="20" height="40" viewBox="0 0 17 21"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="8.57894" cy="5.77803" r="4.77803"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="tp-header-login-content d-none d-xl-block">
                                            <span>Hello, @if (Auth::check())
                                                    {{ Auth::user()->name }}
                                                @else
                                                    Guest
                                                @endif
                                            </span>
                                            <h5 class="tp-header-login-title">Your Account</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="tp-header-action d-flex align-items-center ml-50">
                                    <div class="tp-header-action-item d-none d-lg-block">
                                        <a href="{{ route('wishlist') }}" class="tp-header-action-btn">
                                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            @if (Auth::user())
                                                <span class="btn_badge tp-header-action-badge" id="wishlist-count">
                                                    @if (Auth::user()->wishlist)
                                                        {{ count(Auth::user()->wishlist) }}
                                                    @else
                                                        0
                                                    @endif

                                                </span>
                                            @endif
                                        </a>
                                    </div>
                                    <div class="tp-header-action-item">
                                        {{-- <button type="button" class="tp-header-action-btn cartmini-open-btn"> --}}
                                        <a href="{{ route('cart') }}" class="tp-header-action-btn">
                                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M7.70365 10.1018H7.74942" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M13.5343 10.1018H13.5801" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <span class="btn_badge tp-header-action-badge" id="cart-count">
                                                @if (Session::get('cart'))
                                                    {{ count(Session::get('cart')) }}
                                                @else
                                                    0
                                                @endif
                                            </span>
                                        </a>
                                        {{-- </button> --}}
                                    </div>
                                    <div class="tp-header-action-item d-lg-none">
                                        <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16"
                                                viewBox="0 0 30 16">
                                                <rect x="10" width="20" height="2"
                                                    fill="currentColor" />
                                                <rect x="5" y="7" width="25" height="2"
                                                    fill="currentColor" />
                                                <rect x="10" y="14" width="20" height="2"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header bottom start -->
            <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block">
                <div class="container">
                    <div class="tp-mega-menu-wrapper p-relative">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="tp-header-category tp-category-menu tp-header-category-toggle">
                                    <button class="tp-category-menu-btn tp-category-menu-toggle">
                                        <span>
                                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 1C0 0.447715 0.447715 0 1 0H15C15.5523 0 16 0.447715 16 1C16 1.55228 15.5523 2 15 2H1C0.447715 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447715 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447715 14 1 14H11C11.5523 14 12 13.5523 12 13C12 12.4477 11.5523 12 11 12H1Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        All Categories
                                    </button>
                                    <nav class="tp-category-menu-content">
                                        <ul>
                                            @if ($categories)
                                                @foreach ($categories as $category)
                                                    <li class="has-dropdown">
                                                        <a href="{{ route('shop') }}">
                                                            <span>
                                                                <svg width="18" height="18">
                                                                    <defs>
                                                                        <clipPath id="myCircle">
                                                                            <circle cx="250" cy="100"
                                                                                r="100" fill="#FFFFFF" />
                                                                        </clipPath>
                                                                    </defs>
                                                                 <image width="18px" height="18px" class="rounded"  src="{{ asset('storage/categories_icons/' . $category->icon) }}" alt="image not found">

                                                                    {{-- <image width="500" height="350"
                                                                        xlink:href="{{ asset('storage/categories_icons/' . $category->icon) }}"
                                                                        clip-path="url(#myCircle)" /> --}}
                                                        </svg>
                                                                {{-- <svg width="18" height="18"
                                                                    viewBox="0 0 18 18" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2.6856 4.54975C2.6856 3.52014 3.51984 2.6859 4.54945 2.68508H5.3977C5.88984 2.68508 6.36136 2.48971 6.71089 2.14348L7.30359 1.54995C8.02984 0.819578 9.21031 0.816281 9.94068 1.54253L9.9415 1.54336L9.94892 1.54995L10.5425 2.14348C10.892 2.49053 11.3635 2.68508 11.8556 2.68508H12.7031C13.7327 2.68508 14.5677 3.51932 14.5677 4.54975V5.39636C14.5677 5.88849 14.7623 6.36084 15.1093 6.71037L15.7029 7.3039C16.4332 8.03015 16.4374 9.21061 15.7111 9.94098L15.7103 9.94181L15.7029 9.94923L15.1093 10.5428C14.7623 10.8915 14.5677 11.363 14.5677 11.8551V12.7034C14.5677 13.733 13.7335 14.5672 12.7039 14.5672H12.7031H11.854C11.3619 14.5672 10.8895 14.7626 10.5408 15.1096L9.94727 15.7024C9.22185 16.4327 8.04221 16.4368 7.31183 15.7122C7.31101 15.7114 7.31019 15.7106 7.30936 15.7098L7.30194 15.7024L6.70924 15.1096C6.36054 14.7626 5.88819 14.568 5.39605 14.5672H4.54945C3.51984 14.5672 2.6856 13.733 2.6856 12.7034V11.8535C2.6856 11.3613 2.49023 10.8898 2.14318 10.5411L1.55047 9.94758C0.820097 9.22215 0.815976 8.04251 1.5414 7.31214C1.5414 7.31132 1.54223 7.31049 1.54305 7.30967L1.55047 7.30225L2.14318 6.70872C2.49023 6.35919 2.6856 5.88767 2.6856 5.39471V4.54975"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M6.50787 10.7453L10.745 6.50812"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M10.6823 10.6862H10.6897"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M6.56053 6.56446H6.56795"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> --}}
                                                                {{-- <img width="18px" height="18px" class="rounded" src="{{ asset('storage/categories_icons/' . $category->icon) }}" alt="image not found"> --}}
                                                            </span>
                                                            {{ $category->name }}</a>
                                                            <ul class="tp-submenu">
                                                                @foreach ($category->sub_categories as $item)
                                                                <li><a href="{{ route('shop') }}">{{ $item->name }}</a></li>     
                                                                @endforeach
                                                             </ul>
                                                    </li>
                                                @endforeach
                                            @else
                                                <span>Categories Unavailable</span>
                                            @endif


                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu menu-style-1">
                                    <nav class="tp-main-menu-content">
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('shop') }}">Shop</a></li>
                                            <li><a href="{{ route('about') }}">About us</a></li>
                                            <li><a href="{{ route('contact') }}">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="tp-header-contact d-flex align-items-center justify-content-end">
                                    <div class="tp-header-contact-icon">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                                viewBox="0 0 448 512">
                                                <path
                                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="tp-header-contact-content">
                                        {{-- <i class="fa fa-whatsapp" aria-hidden="true"></i>

                                        <h5>Hotline:</h5> --}}
                                        <p><a href="https://wa.me/+923114145520">+(92) 3114145520</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->


</div>
