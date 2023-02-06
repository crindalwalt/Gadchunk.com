
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
                                                        <td class="d-flex justify-content-start align-items-center">
                                                            {{-- Check for image presence in a product     --}}
                                                            @if($product->productImage->isNotEmpty())
                                                                <img src="{{ asset('storage/' . $product->productImage[0]->image) }}" width='42' class="me-2 img-fluid" alt="image not showing">
                                                            @else
                                                                <svg xmlns="http://www.w3.org/2000/svg"  title="no Images found" width="25" height="25" fill="currentColor" class="bi bi-exclamation-circle me-2 text-warning" viewBox="0 0 16 16">
                                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                                                </svg>
                                                            @endif

                                                            {{ $product->name   }}
                                                        </td>
                                                        <td>

                                                            {{ $product->category->name   }}

                                                        </td>
                                                        <td>{{ $product->stock }}</td>
                                                        <td>22</td>

                                                        <td>
                                                            <a href="/admin/product/{{$product->id}}" class="btn btn-outline-success btn-sm">Show</a>
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
