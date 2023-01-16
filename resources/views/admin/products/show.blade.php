
<x-layouts.admin>

    <!-- ============================================================== -->
    @include('sweetalert::alert')




    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Product Details</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Product Details</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="" class="btn btn-success">Add Widget</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="container-fluid">

                <div class="page-content-wrapper">




                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="product-detail">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="nav flex-column nav-pills" id="v-pills-tab"
                                                             role="tablist" aria-orientation="vertical">
                                                            @foreach($product->productImage as $img)
                                                            <a class="nav-link active" id="product-{{$loop->iteration }}"
                                                               data-bs-toggle="pill" href="#product-{{$loop->iteration}}" role="tab">
                                                                <img src="{{asset( "storage/" . $img->image) }}" alt="1"
                                                                     class="img-fluid mx-auto d-block tab-img rounded">
                                                            </a>
                                                            @endforeach
                                                            <a class="nav-link" id="product-2-tab"
                                                               data-bs-toggle="pill" href="#product-2" role="tab">
                                                                <img src="assets/images/product/img-8.png" alt="2"
                                                                     class="img-fluid mx-auto d-block tab-img rounded">
                                                            </a>
                                                            <a class="nav-link" id="product-3-tab"
                                                               data-bs-toggle="pill" href="#product-3" role="tab">
                                                                <img src="assets/images/product/img-9.png" alt="3"
                                                                     class="img-fluid mx-auto d-block tab-img rounded">
                                                            </a>
                                                            <a class="nav-link" id="product-4-tab"
                                                               data-bs-toggle="pill" href="#product-4" role="tab">
                                                                <img src="assets/images/product/img-11.png" alt="4"
                                                                     class="img-fluid mx-auto d-block tab-img rounded">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-9">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                           @foreach($product->productImage as $img)
                                                            <div class="tab-pane fade" id="product-{{$loop->iteration}}"
                                                                 role="tabpanel">
                                                                <div class="product-img">
                                                                    <img src="{{ asset("storage/".$img->image)}}"
                                                                         alt="this image" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            <div class="tab-pane fade" id="product-3"
                                                                 role="tabpanel">
                                                                <div class="product-img">
                                                                    <img src="assets/images/product/img-9.png"
                                                                         alt="what is this" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="product-4"
                                                                 role="tabpanel">
                                                                <div class="product-img">
                                                                    <img src="assets/images/product/img-11.png"
                                                                         alt="4" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end product img -->
                                        </div>
                                        <div class="col-xl-7">
                                            <div class="mt-4 mt-xl-3">
                                                <a href="#" class="text-primary">{{ $product->category->name }}</a>
                                                <h5 class="mt-1 mb-3">{{ $product->name }}</h5>

                                                <div class="d-inline-flex">
                                                    <div class="text-muted me-3">
                                                        @for($index = 0; $index< $product->rating;$index++)
                                                            <span class="mdi mdi-star text-warning"></span>
                                                        @endfor
                                                    </div>
                                                </div>

                                                <h5 class="mt-2"><del class="text-muted me-2">Rs {{ $product->discountPrice }}</del>Rs {{ $product->orignalPrice }}<span
                                                        class="text-danger font-size-12 ms-2">
                                                        @php
                                                        $og_price = $product->orignalPrice;
                                                        $discount_price = $product->discountPrice;
                                                        $discount_amount = $og_price - $discount_price;
                                                        $discount_percentage = ($discount_amount/$og_price)*100;

                                                        echo round($discount_percentage) . "% OFF";
                                                    @endphp
                                                    </span></h5>

                                                <hr class="my-4">

                                                <div class="mt-4">
                                                    <div class="mt-4">
                                                        <p class="text-muted mb-2">
                                                            <i class="mdi mdi-check-bold text-success me-2"></i>
                                                            {{ $product->description }}
                                                        </p>

                                                    </div>

                                                    <h6>Features :</h6>
                                                </div>

                                                <div class="mt-4">
                                                    <button type="button"
                                                            class="btn btn-primary waves-effect waves-light mt-2">
                                                        <i class="mdi mdi-cart me-2"></i> Add to cart
                                                    </button>



                                                </div>



                                                {{-- OPTIONS --}}

                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <div class="product-color mt-3">
                                                            <h5 class="font-size-14">Color :</h5>
                                                            <a href="#" class="active">
                                                                <div class="product-color-item">
                                                                    <img src="assets/images/product/img-7.png"
                                                                         alt="9" class="avatar-md">
                                                                </div>
                                                                <p>Blue</p>
                                                            </a>
                                                            <a href="#">
                                                                <div class="product-color-item">
                                                                    <img src="assets/images/product/img-8.png"
                                                                         alt="7" class="avatar-md">
                                                                </div>
                                                                <p>Cyan</p>
                                                            </a>
                                                            <a href="#">
                                                                <div class="product-color-item">
                                                                    <img src="assets/images/product/img-9.png"
                                                                         alt="8" class="avatar-md">
                                                                </div>
                                                                <p>Green</p>
                                                            </a>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>

{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h4 class="header-title mb-4">Product Track : </h4>--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-3">--}}
{{--                                            <div class="product-track rounded p-4">--}}
{{--                                                <i class="mdi mdi-truck-fast text-primary h2"></i>--}}

{{--                                                <h5 class="text-uppercase mt-3 font-size-17">Fast Delivery</h5>--}}

{{--                                                <p class="text-muted mt-3 mb-0">Passages and more recently with--}}
{{--                                                    desktop publishing software like--}}
{{--                                                    Aldus PageMaker including versions.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-xl-3">--}}
{{--                                            <div class="product-track rounded p-4">--}}
{{--                                                <i class="mdi mdi-refresh text-danger h2"></i>--}}

{{--                                                <h5 class="text-uppercase mt-3 font-size-17">Returns in 7 Days</h5>--}}

{{--                                                <p class="text-muted mt-3 mb-0">Principle of selection: he rejects--}}
{{--                                                    pleasures to secure other--}}
{{--                                                    greater pleasures or else endures pains worse pains."</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-xl-3">--}}
{{--                                            <div class="product-track rounded p-4">--}}
{{--                                                <i class="mdi mdi-headset text-warning h2"></i>--}}

{{--                                                <h5 class="text-uppercase mt-3 font-size-17">Online Support 24/7--}}
{{--                                                </h5>--}}

{{--                                                <p class="text-muted mt-3 mb-0">Itaque earum rerum hic tenetur a--}}
{{--                                                    sapiente delectus ut aut reiciendis--}}
{{--                                                    volupta maiores alias consequatur aut perferendis.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-xl-3">--}}
{{--                                            <div class="product-track rounded p-4">--}}
{{--                                                <i class="mdi mdi-wallet text-success h2"></i>--}}

{{--                                                <h5 class="text-uppercase mt-3 font-size-17">Secure Payment</h5>--}}

{{--                                                <p class="text-muted mt-3 mb-0">Welcomed and every pain avoided--}}
{{--                                                    certain circumstances and owing to the--}}
{{--                                                    business it will frequently occur that.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                            </div>--}}


                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Reviews : </h4>
                                    <div class="d-inline-flex mb-3">
                                        <div class="text-muted me-3">
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star"></span>
                                        </div>
                                        <div class="text-muted">( 132 customer Review)</div>
                                    </div>
                                    <div class="border p-4 rounded">
                                        <div class="media border-bottom pb-3">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">To an English person, it will seem like
                                                    simplified English, as a skeptical Cambridge</p>
                                                <h5 class="font-size-15 mb-3">James</h5>

                                                <ul class="list-inline product-review-link mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"><i
                                                                class="mdi mdi-thumb-up align-middle me-1"></i>
                                                            Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i
                                                                class="mdi mdi-message-text align-middle me-1"></i>
                                                            Comment</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="float-sm-right font-size-12">11 Feb, 2020</p>
                                        </div>
                                        <div class="media border-bottom py-3">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Everyone realizes why a new common
                                                    language would be desirable</p>
                                                <h5 class="font-size-15 mb-3">David</h5>

                                                <ul class="list-inline product-review-link mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"><i
                                                                class="mdi mdi-thumb-up align-middle me-1"></i>
                                                            Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i
                                                                class="mdi mdi-message-text align-middle me-1"></i>
                                                            Comment</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="float-sm-right font-size-12">22 Jan, 2020</p>
                                        </div>
                                        <div class="media pt-3">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">If several languages coalesce, the
                                                    grammar of the resulting </p>
                                                <h5 class="font-size-15 mb-3">Scott</h5>

                                                <ul class="list-inline product-review-link mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"><i
                                                                class="mdi mdi-thumb-up align-middle me-1"></i>
                                                            Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i
                                                                class="mdi mdi-message-text align-middle me-1"></i>
                                                            Comment</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="float-sm-right font-size-12">04 Jan, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->



        </div>


    </div> <!-- container-fluid -->









    <!-- ============================================================== -->




</x-layouts.admin>
