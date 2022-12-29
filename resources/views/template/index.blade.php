<x-main-layout>






        <div class="slider-banner-area slider-mt-7">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-9">
                        <div class="slider-area mr-15">
                            <div class="slider-active-5 dot-style-6 dot-style-6-position-1">
                                <div class="single-slider slider-height-13 custom-d-flex custom-align-item-center bg-img" style="background-image:url(assets/images/slider/mega-fashion-1-1.jpg);">
                                    <div class="container">
                                        <div class="slider-content-12 slider-animated-1">
                                            <h1 class="animated">Build <br><span class="bold">E-commerce</span> <br><span class="blue">Mega</span> Store</h1>
                                            <p class="animated">Seamlessly predominate enterprise metrics without performance based process </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider slider-height-13 custom-d-flex custom-align-item-center bg-img" style="background-image:url(assets/images/slider/mega-fashion-1-2.jpg);">
                                    <div class="container">
                                        <div class="slider-content-12 slider-animated-1">
                                            <h1 class="animated">Build <br><span class="bold">E-commerce</span> <br><span class="blue">Mega</span> Store</h1>
                                            <p class="animated">Seamlessly predominate enterprise metrics without performance based process </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider slider-height-13 custom-d-flex custom-align-item-center bg-img" style="background-image:url(assets/images/slider/mega-fashion-1-3.jpg);">
                                    <div class="container">
                                        <div class="slider-content-12 slider-animated-1">
                                            <h1 class="animated">Build <br><span class="bold">E-commerce</span> <br><span class="blue">Mega</span> Store</h1>
                                            <p class="animated">Seamlessly predominate enterprise metrics without performance based process </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="banner-wrap ml-15">
                            <div class="banner-img fix">
                                <a href="../frontEnd/product-details.html"><img src="assets/images/banner/banner-54.jpg" alt="banner"></a>
                            </div>
                            <div class="banner-content-21">
                                <h3><span>35%</span> off</h3>
                                <p>Modern Furniture</p>
                            </div>
                            <div class="banner-btn-4 black text-center mega-fashion1-banner-btn">
                                <a href="shop.blade.php">Browse Store <img class="inject-me" src="assets/images/icon-img/right-arrow-banner-2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="categorie-area">
            <div class="container-fluid p-0 ">
                <div class="row g-0 d-flex justify-content-center" >
                    @foreach($categories as $cat)

                    <x-partials.category-card :cat="$cat" />
                    @endforeach



                </div>
            </div>
        </div>
        <div class="deal-product-service-area pt-160 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="offer-product-wrap mr-60">
                            <div class="product-img product-img-zoom">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-132.jpg" alt="">
                                </a>
                                <div class="title-timer product-timer-2 text-center">
                                    <div class="mega-fashion-pro-title">
                                        <h4><a href="#">Featured Product</a></h4>
                                    </div>
                                    <div class="timer-2 timer-style-1 mega-fashion-timer">
                                        <div data-countdown="2024/01/01"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mega-fashion-pro-offer">
                                <p>Complete <br>Workstation Set</p>
                                <h3>75%</h3>
                                <span>Off</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="service-wrap-3 mb-85">
                                    <div class="service-img-3">
                                        <img class="inject-me" src="assets/images/icon-img/happiness.svg" alt="">
                                    </div>
                                    <div class="service-content-3">
                                        <h3>Happiness Guarantee</h3>
                                        <p>Free Shipping for any product and it's world wide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="service-wrap-3 mb-85">
                                    <div class="service-img-3">
                                        <img class="inject-me" src="assets/images/icon-img/shipping-car.svg" alt="">
                                    </div>
                                    <div class="service-content-3">
                                        <h3>Free Shipping </h3>
                                        <p>Free Shipping for any product and it's world wide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="service-wrap-3 mb-85">
                                    <div class="service-img-3">
                                        <img class="inject-me" src="assets/images/icon-img/support-expart.svg" alt="">
                                    </div>
                                    <div class="service-content-3">
                                        <h3>24/7 Support Expert </h3>
                                        <p>Free Shipping for any product and it's world wide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="service-wrap-3 mb-85">
                                    <div class="service-img-3">
                                        <img class="inject-me" src="assets/images/icon-img/trusty.svg" alt="">
                                    </div>
                                    <div class="service-content-3">
                                        <h3>All Trusty Brand </h3>
                                        <p>Free Shipping for any product and it's world wide</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="offer-product-wrap">
                            <div class="mega-fashion-pro-title2">
                                <h2>Deals of the Day</h2>
                            </div>
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-133.jpg" alt="">
                                </a>
                                <div class="title-timer product-timer-3 text-center">
                                    <div class="timer-3 timer-style-1 timer-style-1-center mega-fashion-timer mb-40">
                                        <div data-countdown="2031/01/01"></div>
                                    </div>
                                    <div class="banner-btn-4 black">
                                        <a href="shop.blade.php">Browse Store <img class="inject-me arrow-mrg-dec" src="assets/images/icon-img/right-arrow-banner-2.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-50">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-134.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Modern Light</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Modern Light</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-50">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-135.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Wood Table Clock</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Wood Table Clock</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-50">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-136.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Smart Watch</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Smart Watch</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-50">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-137.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Wood Pen & Holder</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Wood Pen & Holder</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-50">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-138.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Eco Bag</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Eco Bag</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-50">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-139.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Table Plant</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Table Plant</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="banner-wrap-2 mega-fashion-banner-bg1 mb-30">
                            <div class="row">
                                <div class="col-xl-7 col-lg-12">
                                    <div class="banner-content-22">
                                        <h3>Smart Life Gadgets <br>Collection</h3>
                                        <p>Seamlessly predominate enterprise metrics without performance based</p>
                                        <div class="banner-btn-4 black">
                                            <a href="shop.blade.php">Browse Store <img class="inject-me arrow-mrg-dec" src="assets/images/icon-img/right-arrow-banner-2.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-12">
                                    <div class="banner-img-2 banner-img-2-mrg1">
                                        <a href="#"><img src="assets/images/banner/banner-55.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="banner-wrap-2 mega-fashion-banner-bg2 mb-30">
                            <div class="row">
                                <div class="col-xl-7 col-lg-12">
                                    <div class="banner-content-22">
                                        <h3>Smart Life Gadgets <br>Collection</h3>
                                        <p>Seamlessly predominate enterprise metrics without performance based</p>
                                        <div class="banner-btn-4 black">
                                            <a href="shop.blade.php">Browse Store <img class="inject-me arrow-mrg-dec" src="assets/images/icon-img/right-arrow-banner-2.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-12">
                                    <div class="banner-img-2 banner-img-2-mrg2">
                                        <a href="#"><img src="assets/images/banner/banner-56.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pt-160 pb-115">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="section-title-8">
                            <h2 class="bold">Deal Of The Month</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-btn-4 black-2 banner-btn-4-right banner-btn-4-mrg-none">
                            <a href="shop.blade.php">Browse All Products <img class="inject-me arrow-mrg-dec" src="assets/images/icon-img/right-arrow-banner-2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="product-tab-list-1 tab-list-1-left nav mt-100 mb-65">
                    <a class="active" href="#product-1" data-bs-toggle="tab">
                        All
                    </a>
                    <a href="#product-2" data-bs-toggle="tab">
                        Gadget
                    </a>
                    <a href="#product-3" data-bs-toggle="tab">
                        Fashion
                    </a>
                    <a href="#product-4" data-bs-toggle="tab">
                        Furniture
                    </a>
                    <a href="#product-5" data-bs-toggle="tab">
                        Books
                    </a>
                    <a href="#product-6" data-bs-toggle="tab">
                        Sports
                    </a>
                </div>
                <div class="tab-content jump">
                    <div id="product-1" class="tab-pane active">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-140.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-141.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-142.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-143.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-144.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-145.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-146.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-147.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-148.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-149.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-150.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-2" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-141.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-142.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-143.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-144.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-145.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-146.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-147.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-148.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-149.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-150.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-140.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-3" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-141.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-142.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-140.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-143.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-144.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-145.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-146.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-147.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-148.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-149.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-150.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-4" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-141.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-142.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-143.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-144.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-140.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-145.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-146.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-147.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-148.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-149.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-150.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-5" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-141.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-142.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-143.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-144.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-145.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-146.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-140.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-147.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-148.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-149.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-150.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-6" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-141.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-142.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-143.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-144.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-145.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-146.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-147.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-148.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-140.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-149.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="../frontEnd/product-details.html">
                                            <img src="assets/images/product/product-150.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                        <div class="product-price">
                                            <span>$ 124</span>
                                            <span class="old-price">$ 130</span>
                                        </div>
                                    </div>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                            <div class="product-price">
                                                <span>$ 124</span>
                                                <span class="old-price">$ 130</span>
                                            </div>
                                        </div>
                                        <div class="product-action-wrap">
                                            <div class="product-action-cart">
                                                <button class="padding-dec" title="Add to Cart">Add to cart</button>
                                            </div>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-155">
            <div class="container">
                <div class="section-title-8 mb-65">
                    <h2>You May Like Also</h2>
                </div>
                <div class="product-slider-active-4">
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-151.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-152.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-153.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-154.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="../frontEnd/product-details.html">
                                    <img src="assets/images/product/product-152.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="../frontEnd/product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-area bg-img mega-fashion-bg-img pt-90 pb-130" style="background-image:url(assets/images/bg/bg-10.jpg);">
            <div class="container">
                <div class="about-content-mega-fashion">
                    <h2>Best Ecommerce Solutions, Build Your <br>Store With Dking</h2>
                    <p>Conveniently repurpose web-enabled supply chains after technically sound action items. Progressively implement granular e-markets whereas customized niches. Assertively envisioneer sticky intellectual capital for user-centric leadership skills.</p>
                    <div class="banner-btn-4 black">
                        <a href="shop.blade.php">Browse All Products <img class="inject-me arrow-mrg-dec" src="assets/images/icon-img/right-arrow-banner-2.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="shape-1"></div>
            <div class="fashion1-polygon"><img src="assets/images/about/fashion1-polygon.png" alt=""></div>
            <div class="shape-3"></div>
        </div>
        <div class="brand-logo-area pt-160">
            <div class="container">
                <div class="mb-65">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="section-title-8">
                                <h2 class="bold">Top Brand</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="banner-btn-4 black-2 banner-btn-4-right banner-btn-4-mrg-none">
                                <a href="#">Browse All Brand <img class="inject-me arrow-mrg-dec" src="assets/images/icon-img/right-arrow-banner-2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-27.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-28.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-29.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-30.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-31.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-32.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-5.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                        <div class="single-brand-logo-4 mb-70">
                            <img src="assets/images/brand-logo/brand-logo-6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area fix pt-90 pb-150">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-8 col-md-12 col-12 position-relative">
                        <div class="testimonial-3-content-area">
                            <div class="testimonial-title-wrap">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7">
                                        <div class="testimonial-title">
                                            <h3>We Love Our Client They <br>Love Us</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-active-3 mega-testimonial-mt dot-style-3 dot-style-3-position-2">
                                <div class="single-testimonial-2">
                                    <h4>The team was always polite</h4>
                                    <p>Intrinsically seize effective synergy for e-business best practices. Completely reconceptualize quality platforms after proactive relationships. Appropriately negotiate leading-edge e-tailers after technically sound leadership. Conveniently architect.</p>
                                    <div class="client-info-2">
                                        <div class="testi-rating-2">
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                        </div>
                                        <h3>James Fernandez</h3>
                                    </div>
                                </div>
                                <div class="single-testimonial-2">
                                    <h4>The team was always polite</h4>
                                    <p>Intrinsically seize effective synergy for e-business best practices. Completely reconceptualize quality platforms after proactive relationships. Appropriately negotiate leading-edge e-tailers after technically sound leadership. Conveniently architect for e-business best practices.</p>
                                    <div class="client-info-2">
                                        <div class="testi-rating-2">
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                        </div>
                                        <h3>Binte Chuka</h3>
                                    </div>
                                </div>
                                <div class="single-testimonial-2">
                                    <h4>The team was always polite</h4>
                                    <p>Completely reconceptualize quality platforms after proactive relationships. Appropriately negotiate leading-edge e-tailers after technically sound leadership. Conveniently architect.</p>
                                    <div class="client-info-2">
                                        <div class="testi-rating-2">
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                            <i class="icon-rating"></i>
                                        </div>
                                        <h3>Binte Chuka</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-3-btn">
                                <a href="../frontEnd/product-details.html">All Testimonials <img class="inject-me" src="assets/images/icon-img/arrow-right.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="testimonial-next-img">
                            <img src="assets/images/testimonial/testimonial-img-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-12 col-12 me-auto">
                        <div class="testimonial-img-slider-active-3">
                            <div class="testimonial-img-slider">
                                <img src="assets/images/testimonial/testimonial-img-17.jpg" alt="">
                                <div class="testimonial-img-slider-icon">
                                    <img class="inject-me icon-black" src="assets/images/icon-img/quotes-icon-2.svg" alt="">
                                </div>
                            </div>
                            <div class="testimonial-img-slider">
                                <img src="assets/images/testimonial/testimonial-img-18.jpg" alt="">
                                <div class="testimonial-img-slider-icon">
                                    <img class="inject-me icon-black" src="assets/images/icon-img/quotes-icon-2.svg" alt="">
                                </div>
                            </div>
                            <div class="testimonial-img-slider">
                                <img src="assets/images/testimonial/testimonial-img-1.jpg" alt="">
                                <div class="testimonial-img-slider-icon">
                                    <img class="inject-me icon-black" src="assets/images/icon-img/quotes-icon-2.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-area pb-125">
            <div class="container">
                <div class="section-title-8 mb-60">
                    <h2>Pres Release </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-35">
                                <a href="blog-detail.blade.php"><img src="assets/images/blog/blog-10.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-detail.blade.php">Professionally e-enable high payoff data before sticky opportunities. </a></h3>
                                <span class="mrg-top-inc">on April 24, 2019</span>
                                <p>Seamlessly administrate client centered technology without optimal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-35">
                                <a href="blog-detail.blade.php"><img src="assets/images/blog/blog-11.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-detail.blade.php">Designers matched perfectly to you on Envato Studio</a></h3>
                                <span class="mrg-top-inc">on April 24, 2019</span>
                                <p>Compellingly fabricate optimal bandwidth for inter-mandated deliverables. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-35">
                                <a href="blog-detail.blade.php"><img src="assets/images/blog/blog-12.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-detail.blade.php">Phos fluorescently leverage existing client-based technologies.</a></h3>
                                <span class="mrg-top-inc">on April 24, 2019</span>
                                <p>Progressively transform fully tested markets after covalent sources.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="instagram-area mega-fashion-instagram pt-160 pb-125">
            <div class="container-fluid">
                <div class="row grid">
                    <div class="col-lg-3 col-md-6 col-sm-6 grid-item">
                        <div class="section-title-9 mega-fashion-instagram-title">
                            <h2 class="bold">Follow Us On <br> Instagram</h2>
                            <span class="mrg-dec">@hashop</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 grid-item">
                        <div class="single-instafeed mb-30">
                            <a href="#"><img src="assets/images/instafeed/instafeed-36.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 grid-item">
                        <div class="single-instafeed mb-30">
                            <a href="#"><img src="assets/images/instafeed/instafeed-37.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 grid-item">
                        <div class="single-instafeed mb-30">
                            <a href="#"><img src="assets/images/instafeed/instafeed-38.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 grid-item">
                        <div class="single-instafeed mb-30">
                            <a href="#"><img src="assets/images/instafeed/instafeed-39.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</x-main-layout>
