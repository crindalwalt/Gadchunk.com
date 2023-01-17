
<x-layouts.admin>
    {{--    @dd($categories)--}}
    <!-- ============================================================== -->
{{--    @include('sweetalert::alert')--}}

    @include('sweetalert::alert')
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Products</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                    <li class="breadcrumb-item active">Product Management</li>
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



                    <!-- Filters bar for product -->
                    <div class="row">
                        {{-- Admin products sidebar --}}
{{--                        <div class="col-xl-3 col-lg-4">--}}



{{--                            <div class="card">--}}

{{--                                <div class="card-body">--}}

{{--                                    <h4 class="header-title">Filters</h4>--}}

{{--                                    <div class="border p-3 rounded mt-4">--}}

{{--                                        <h5 class="font-size-16">Search</h5>--}}

{{--                                        <div class="search-box me-2 mt-3">--}}
{{--                                            <div class="position-relative">--}}
{{--                                                <input type="text" class="form-control" placeholder="Search...">--}}
{{--                                                <i class="ti-search search-icon"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}


{{--                                    <div class="border p-3 rounded mt-4">--}}
{{--                                        <h5 class="font-size-16">Categories</h5>--}}


{{--                                        <div id="accordion" class="custom-accordion categories-accordion">--}}
{{--                                            <div class="categories-group-card">--}}
{{--                                                <a href="#collapseOne" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">--}}
{{--                                                    <i class="ti-desktop font-size-16 align-middle me-2"></i> Electronic--}}
{{--                                                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>--}}
{{--                                                </a>--}}

{{--                                                <div id="collapseOne" class="collapse" data-parent="#accordion">--}}
{{--                                                    <div>--}}
{{--                                                        <ul class="list-unstyled categories-list mb-0">--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Mobile</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Cemera</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Mobile accessories</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Computers</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Laptops</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Speakers</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="categories-group-card">--}}
{{--                                                <a href="#collapseTwo" class="categories-group-list" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">--}}
{{--                                                    <i class="ti-archive font-size-16 align-middle me-2"></i> Furniture--}}
{{--                                                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>--}}
{{--                                                </a>--}}
{{--                                                <div id="collapseTwo" class="collapse show" data-parent="#accordion">--}}
{{--                                                    <div>--}}
{{--                                                        <ul class="list-unstyled categories-list mb-0">--}}
{{--                                                            <li class="active"><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Chairs </a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Tables</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Beds </a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Seating</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="categories-group-card">--}}
{{--                                                <a href="#collapseThree" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                                    <i class="mdi mdi-pinwheel-outline font-size-16 align-middle me-2"></i> Baby & Kids--}}
{{--                                                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>--}}
{{--                                                </a>--}}
{{--                                                <div id="collapseThree" class="collapse" data-parent="#accordion">--}}
{{--                                                    <div>--}}
{{--                                                        <ul class="list-unstyled categories-list mb-0">--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Clothing</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Footwear</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Toys</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Baby care</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="categories-group-card">--}}
{{--                                                <a href="#collapseFour" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">--}}
{{--                                                    <i class="mdi mdi-dumbbell font-size-16 align-middle me-2"></i> Fitness--}}
{{--                                                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>--}}
{{--                                                </a>--}}
{{--                                                <div id="collapseFour" class="collapse" data-parent="#accordion">--}}
{{--                                                    <div>--}}
{{--                                                        <ul class="list-unstyled categories-list mb-0">--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Gym equipment</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Yoga mat</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Dumbbells</a></li>--}}
{{--                                                            <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Protein supplements</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="border p-3 rounded mt-4">--}}
{{--                                        <h5 class="font-size-16">Multi Range</h5>--}}

{{--                                        <div class="mt-4">--}}
{{--                                            <div class="form-check mt-2">--}}
{{--                                                <input type="radio" id="multirange" name="multirange1" class="form-check-input" checked>--}}
{{--                                                <label class="custom-control-label" for="multirange"> All</label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check mt-2">--}}
{{--                                                <input type="radio" id="multirange1" name="multirange1" class="form-check-input">--}}
{{--                                                <label class="custom-control-label" for="multirange1"> $1 - $10</label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check mt-2">--}}
{{--                                                <input type="radio" id="multirange2" name="multirange1" class="form-check-input">--}}
{{--                                                <label class="custom-control-label" for="multirange2"> $10 - $100</label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check mt-2">--}}
{{--                                                <input type="radio" id="multirange3" name="multirange1" class="form-check-input">--}}
{{--                                                <label class="custom-control-label" for="multirange3"> $100 - $500</label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check mt-2">--}}
{{--                                                <input type="radio" id="multirange4" name="multirange1" class="form-check-input">--}}
{{--                                                <label class="custom-control-label" for="multirange4"> $500</label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="border p-3 rounded mt-4">--}}
{{--                                        <h5 class="font-size-16 mb-4">Price</h5>--}}

{{--                                        <input type="text" id="pricerange" class="form-control">--}}
{{--                                    </div>--}}




{{--                                    <div class="border p-3 rounded mt-4">--}}
{{--                                        <h5 class="font-size-16 mb-0 custom-accordion"><a href="#collapseExample1" class="text-dark d-block" data-bs-toggle="collapse" >Discount <i class="mdi mdi-minus float-end accor-plus-icon"></i></a></h5>--}}

{{--                                        <div class="collapse show" id="collapseExample1">--}}

{{--                                            <div class="mt-4">--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productdiscountRadio6" name="productdiscountRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productdiscountRadio6">50% or more</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productdiscountRadio5" name="productdiscountRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productdiscountRadio5">40% or more</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productdiscountRadio4" name="productdiscountRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productdiscountRadio4">30% or more</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productdiscountRadio3" name="productdiscountRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productdiscountRadio3">25% or more</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productdiscountRadio2" name="productdiscountRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productdiscountRadio2">10% or more</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productdiscountRadio1" name="productdiscountRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productdiscountRadio1">Less than 10%</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="border p-3 rounded mt-4">--}}
{{--                                        <h5 class="font-size-16 mb-0 custom-accordion"><a href="#collapseExample3" class="text-dark d-block" data-bs-toggle="collapse">Customer Rating <i class="mdi mdi-minus float-end accor-plus-icon"></i></a></h5>--}}

{{--                                        <div class="collapse show" id="collapseExample3">--}}

{{--                                            <div class="mt-4">--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productratingRadio5" name="productratingRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productratingRadio5">5 <i class="mdi mdi-star text-warning"></i>  & Above</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productratingRadio1" name="productratingRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productratingRadio1">4 <i class="mdi mdi-star text-warning"></i>  & Above</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productratingRadio2" name="productratingRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productratingRadio2">3 <i class="mdi mdi-star text-warning"></i>  & Above</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productratingRadio3" name="productratingRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productratingRadio3">2 <i class="mdi mdi-star text-warning"></i>  & Above</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check mt-2">--}}
{{--                                                    <input type="radio" id="productratingRadio4" name="productratingRadio1" class="form-check-input">--}}
{{--                                                    <label class="custom-control-label" for="productratingRadio4">1 <i class="mdi mdi-star text-warning"></i></label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        {{-- Products to view --}}
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">All Products</h4>
                                    <div class="table-responsive">
                                        @if($products->isNotEmpty())
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Product</th>

                                                <th>Category</th>
                                                <th>Stock</th>
                                                <th>Sold </th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ asset('storage/' . $product->productImage[0]->image) }}" width="42" class="me-3" alt="">{{ $product->name   }}</td>
                                                <td>{{ $product->category->name   }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>22</td>

                                                <td>
                                                    <a href="/shop/product/{{$product->id}}" class="btn btn-outline-success btn-sm">Show</a>
                                                    <form class="d-inline" action="/admin/product/{{$product->id}}/edit" method="GET">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-primary btn-sm">Edit</button>
                                                    </form>
                                                    <form class="d-inline" action="/admin/product/{{$product->id}}/delete" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                                    </form>


                                                </td>
                                            </tr>
                                            @endforeach








                                            </tbody>
                                        </table>
                                        @else
                                            <div class="text-center text-warning text-lg font-size-24 font-semibold d-flex justify-content-center align-items-center
                                        ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                                <span class="mx-3">
                                                No Products to show <br>

                                            </span>
                                            </div>


                                        @endif
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>




{{--                        Good old card   --}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="row">--}}
{{--                                @foreach($products as $product)--}}
{{--                                @dd($product->productImage[0]->image)--}}
{{--                                <div class="col-xl-4 col-sm-6 m-3">--}}
{{--                                    <div class="card h-100 ">--}}
{{--                                        <div class="card-body"    >--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}

{{--                                                      @php--}}
{{--                                                          $og_price = $product->orignalPrice;--}}
{{--                                                          $discount_price = $product->discountPrice;--}}
{{--                                                          $discount_amount = $og_price - $discount_price;--}}
{{--                                                          $discount_percentage = ($discount_amount/$og_price)*100;--}}

{{--                                                          echo round($discount_percentage) . "% OFF";--}}
{{--                                                      @endphp--}}
{{--                                                </div>--}}




{{--                                                <img src="{{ asset('storage/'.$product->productImage[0]->image) }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="/admin/product/{{$product->id}}" class="text-dark">--}}
{{--                                                    <p class="muted">{{ $product->category->name }}</p>--}}
{{--                                                    <h5 class="font-size-18">{{ $product->name }}</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">Rs {{ $product->discountPrice }} <span class="font-size-14 text-muted me-2"><del>{{ $product->orignalPrice }}</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            @for($index = 0; $index< 5;$index++)--}}
{{--                                                                <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            @endfor--}}

{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @endforeach--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-sm-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="product-ribbon  bg-primary">--}}
{{--                                                    25% Off--}}
{{--                                                </div>--}}

{{--                                                <img src="{{ asset('admin-assets/images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">--}}
{{--                                            </div>--}}



{{--                                            <div class="text-center">--}}

{{--                                                <a href="" class="text-dark">--}}
{{--                                                    <h5 class="font-size-18">Home & Office Chair Green</h5>--}}
{{--                                                </a>--}}

{{--                                                <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>--}}

{{--                                                <div class="mt-3">--}}
{{--                                                    <ul class="list-inline">--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star text-warning"></i>--}}
{{--                                                            <i class="mdi mdi-star-half text-warning"></i>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="row">--}}


{{--                                <div class="col-xl-12">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-sm-6">--}}
{{--                                                    <div>--}}
{{--                                                        <p class="mb-sm-0 mt-2">Page <span class="font-weight-bold">2</span> Of <span class="font-weight-bold">113</span></p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-sm-6">--}}
{{--                                                    <div class="float-sm-end">--}}
{{--                                                        <ul class="pagination pagination-rounded mb-sm-0">--}}
{{--                                                            <li class="page-item disabled">--}}
{{--                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="page-item">--}}
{{--                                                                <a href="#" class="page-link">1</a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="page-item active">--}}
{{--                                                                <a href="#" class="page-link">2</a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="page-item">--}}
{{--                                                                <a href="#" class="page-link">3</a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="page-item">--}}
{{--                                                                <a href="#" class="page-link">4</a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="page-item">--}}
{{--                                                                <a href="#" class="page-link">5</a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="page-item">--}}
{{--                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                            </div>--}}


{{--                        </div>--}}


                    </div>
                    <!-- end row -->

                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->





        <x-partials.admin-footer />
    </div>









    <!-- ============================================================== -->




</x-layouts.admin>
