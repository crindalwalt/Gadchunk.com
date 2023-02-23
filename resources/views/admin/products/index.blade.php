{{--<x-layouts.admin>--}}
{{--    --}}{{-- @dd($products) --}}
{{--    <!-- ============================================================== -->--}}
{{--    @include('sweetalert::alert')--}}
{{--    <div class="main-content">--}}


{{--        <div class="page-content">--}}

{{--            <!-- start page title -->--}}
{{--            <div class="page-title-box">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <div class="page-title">--}}
{{--                                <h4>Manage Products</h4>--}}
{{--                                <ol class="breadcrumb m-0">--}}
{{--                                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="/admin/collections">Products</a></li>--}}
{{--                                    <li class="breadcrumb-item active">Manage Products</li>--}}
{{--                                </ol>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <div class="float-end d-none d-sm-block">--}}
{{--                                <a href="/admin" class="btn btn-success">Dashboard</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- end page title -->--}}


{{--            <div class="container-fluid">--}}

{{--                <div class="page-content-wrapper">--}}


{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <form action="{{ route('products.store') }}" enctype="multipart/form-data"--}}
{{--                                        method="POST">--}}
{{--                                        @csrf--}}

{{--                                        <h4 class="header-title">Add New Products</h4>--}}
{{--                                        <p class="card-title-desc">You can add products here</p>--}}
{{--                                        <div class="row">--}}

{{--                                            <div class="col-12 mb-3">--}}
{{--                                                <label for="example-text-input"--}}
{{--                                                    class="col-sm-2 col-form-label">Name</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <input class="form-control" type="text"--}}
{{--                                                        placeholder="Enter product name" id="example-text-input"--}}
{{--                                                        name="name">--}}
{{--                                                    @error('name')--}}
{{--                                                        <div class="text-danger"></div>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-12 mb-3">--}}
{{--                                                <label class="control-label"> Product Category</label>--}}
{{--                                                <select name="category_id" class="form-control select2">--}}
{{--                                                    <option>Select</option>--}}
{{--                                                    @foreach ($categories as $cat)--}}
{{--                                                        <option value="{{ $cat->id }}"--}}
{{--                                                            class="d-flex justify-content-between">--}}
{{--                                                            {{ $cat->name }}--}}
{{--                                                            <small--}}
{{--                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>--}}
{{--                                                        </option>--}}
{{--                                                    @endforeach--}}
{{--                                                </select>--}}
{{--                                                @error('category_id')--}}
{{--                                                    <div class="text-danger fw-semibold">{{ $message }}</div>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

{{--                                            <div class="col-12 mb-3">--}}
{{--                                                <label for="example-text-input"--}}
{{--                                                    class=" col-form-label">Description</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <input class="form-control" type="text"--}}
{{--                                                        placeholder="Enter product description" id="example-text-input"--}}
{{--                                                        name="description">--}}
{{--                                                    @error('description')--}}
{{--                                                        <div class="text-danger"></div>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <div class="row mb-3">--}}
{{--                                            <div class="#">--}}
{{--                                                <input class="btn btn-lg px-4 py-2 btn-primary" type="submit"--}}
{{--                                                    value="Add Product" id="example-email-input">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </form>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h4 class="header-title">Browse all Products</h4>--}}
{{--                                    <p class="card-title-desc">All of the below Products are fetched from the--}}
{{--                                        DateBase</p>--}}
{{--                                    <div class="table-responsive">--}}

{{--                                        <table class="table mb-0">--}}
{{--                                            @if ($products->isNotEmpty())--}}
{{--                                                <thead>--}}
{{--                                                    <tr>--}}
{{--                                                        <th>#</th>--}}
{{--                                                        <th> Name</th>--}}
{{--                                                        <th> Category</th>--}}
{{--                                                        <th> Status</th>--}}
{{--                                                        <th>Actions</th>--}}
{{--                                                    </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody>--}}

{{--                                                    @foreach ($products as $product)--}}
{{--                                                        <tr>--}}
{{--                                                            <th scope="row">{{ $loop->iteration }}</th>--}}
{{--                                                            <td>{{ $product->name }}</td>--}}
{{--                                                            <td>{{ $product->category_id }}</td>--}}
{{--                                                            <td>--}}
{{--                                                                @if ($product->is_active == 0)--}}
{{--                                                                    Unactive--}}
{{--                                                                @else--}}
{{--                                                                    Active--}}
{{--                                                                @endif--}}
{{--                                                            </td>--}}

{{--                                                            <td class="">--}}
{{--                                                                <a href="/admin/collection/"--}}
{{--                                                                    class="btn btn-outline-success btn-sm">Show</a>--}}

{{--                                                                <form action="" method="POST" class="d-inline">--}}
{{--                                                                    @csrf--}}
{{--                                                                    <input type="hidden" value="" name="id">--}}
{{--                                                                    <button type="submit"--}}
{{--                                                                        class="btn btn-sm btn-outline-danger">Delete</button>--}}
{{--                                                                </form>--}}
{{--                                                            </td>--}}

{{--                                                        </tr>--}}
{{--                                                    @endforeach--}}
{{--                                                @else--}}
{{--                                                    <div--}}
{{--                                                        class="text-center text-warning text-lg font-size-24 font-semibold d-flex justify-content-center align-items-center--}}
{{--                                            ">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30"--}}
{{--                                                            height="30" fill="currentColor"--}}
{{--                                                            class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">--}}
{{--                                                            <path--}}
{{--                                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />--}}
{{--                                                        </svg>--}}
{{--                                                        <span class="mx-3">--}}
{{--                                                            No Products to show <br>--}}

{{--                                                        </span>--}}
{{--                                                    </div>--}}
{{--                                            @endif--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- end col -->--}}
{{--                    </div>--}}
{{--                    <!-- end row -->--}}


{{--                </div>--}}


{{--            </div> <!-- container-fluid -->--}}
{{--        </div>--}}
{{--        <x-partials.admin-footer />--}}
{{--    </div>--}}


{{--    <!-- ============================================================== -->--}}


{{--</x-layouts.admin>--}}


{{--? NEW CODE--}}


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
                                <h4>Update Product</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/products">Products</a></li>
                                    <li class="breadcrumb-item active">Add Product</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="/admin/products/" class="btn btn-success">All Products</a>
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
                                    <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                        <ul class="twitter-bs-wizard-nav">
                                            <li class="nav-item add-product-border">
                                                <a href="#basic-info" class="nav-link" data-toggle="tab">
                                                    <span class="step-number">01. Basic Info</span>
                                                </a>
                                            </li>
                                            <li class="nav-item add-product-border">
                                                <a href="#product-img" class="nav-link" data-toggle="tab">
                                                    <span class="step-number">02. Product Img</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#metadata" class="nav-link" data-toggle="tab">
                                                    <span class="step-number">03. Meta Data</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- ebd ul -->
                                        <form id="product_add_form" action="{{ route("products.store") }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="tab-content twitter-bs-wizard-tab-content">
                                                <div class="tab-pane" id="basic-info">
                                                    <h4 class="header-title">Basic Information</h4>
                                                    <p class="card-title-desc">Fill all information below</p>


                                                    <div class="mb-3">
                                                        <label class="form-label" for="product_name">Product
                                                            Name</label>
                                                        <input id="product_name" name="product_name" type="text" "
                                                        class="form-control" placeholder="Enter your name">
                                                        @error('product_name')
                                                        <div class="text-danger fw-semibold">{{$message}}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="control-label">Brand</label>

                                                                <select
                                                                    class="select2 form-control select2-multiple"


                                                                    name="product_brand">
                                                                    <option value="{{ null }}">Select</option>
                                                                    @foreach($brands as $brand)
                                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('product_options')
                                                                <div class="text-danger fw-semibold">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                       for="product_price">Price</label>
                                                                <input id="product_price"
                                                                       name="product_price" type="number"
                                                                       class="form-control"
                                                                       placeholder="Enter Orignal Price">
                                                                @error('product_price')
                                                                <div class="text-danger fw-semibold">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="product_discount_price">Discount
                                                                    Price</label>
                                                                <input id="product_discount_price"
                                                                       name="product_discount_price" type="number"
                                                                       class="form-control"
                                                                       placeholder="Enter discount price (if any)">
                                                                @error('product_discount_price')
                                                                <div class="text-danger fw-semibold">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="control-label">Category</label>
                                                                <select name="product_category"
                                                                        class="form-control select2">
                                                                    <option>Select</option>
                                                                    @foreach($categories as $cat)
                                                                        <option

                                                                        >{{ $cat->name }}

                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                @error('product_category')
                                                                <div class="text-danger fw-semibold">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="control-label" for="product_stock">Stock
                                                                    Available</label>
                                                                <input id="product_stock" name="product_stock"
                                                                       type="number"
                                                                       class="form-control"
                                                                       placeholder="Enter Available Stock">
                                                                @error('product_stock')
                                                                <div class="text-danger fw-semibold">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        @foreach ($attributes as $attr)
                                                            <div class="col-4 mb-3">
                                                                <label
                                                                    class="control-label">{{$attr->attribute_name}}</label>
                                                                <select name="{{$attr->attribute_name}}.'[]'"
                                                                        class="form-control select2" multiple
                                                                        data-placeholder="Choose ...">
                                                                    <option value="{{null}}">Select</option>
                                                                    @foreach ($attr->prod_attribute_value as $value)
                                                                        <option value="{{$value->id}}"
                                                                                class="d-flex justify-content-between ">
                                                                            {{$value->attribute_value}}
                                                                            <small
                                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                @error("{{$attr->attribute_name}}.'[]'")
                                                                <div
                                                                    class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        @endforeach
                                                        {{--                                                        <div class="col-md-4">--}}
                                                        {{--                                                            <div class="mb-3">--}}
                                                        {{--                                                                <label class="control-label">Features</label>--}}

                                                        {{--                                                                <select--}}
                                                        {{--                                                                    class="select2 form-control select2-multiple"--}}
                                                        {{--                                                                    multiple="multiple"--}}
                                                        {{--                                                                    data-placeholder="Choose ..."--}}
                                                        {{--                                                                    name="product_options">--}}
                                                        {{--                                                                    <option value="TO">Touchscreen</option>--}}
                                                        {{--                                                                    <option value="CF">Call Function</option>--}}
                                                        {{--                                                                    <option value="NO" selected>Notifications--}}
                                                        {{--                                                                    </option>--}}
                                                        {{--                                                                    <option value="FI" selected>Fitness</option>--}}
                                                        {{--                                                                    <option value="OU">Outdoor</option>--}}
                                                        {{--                                                                </select>--}}
                                                        {{--                                                                @error('product_options')--}}
                                                        {{--                                                                <div class="text-danger fw-semibold">{{$message}}</div>--}}
                                                        {{--                                                                @enderror--}}
                                                        {{--                                                            </div>--}}
                                                        {{--                                                        </div>--}}
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="product_description">Product
                                                            Description</label>
                                                        <textarea class="form-control" id="product_description" rows="5"
                                                                  placeholder="Enter Description"
                                                                  name="product_description">lorem ipsum</textarea>
                                                        @error('product_description')
                                                        <div class="text-danger fw-semibold">{{$message}}</div>
                                                        @enderror
                                                    </div>


                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                        <li class="next">
                                                            <a href="#">
                                                                Product Img
                                                                <i class="mdi mdi-arrow-right ms-1"></i>
                                                            </a>
                                                        </li>
                                                    </ul>


                                                </div>
                                                <!-- end tabpane -->
                                                <div class="tab-pane" id="product-img">
                                                    <h4 class="header-title">Product Images</h4>
                                                    <p class="card-title-desc">Upload product image</p>

                                                    <div class="dropzone">
                                                        <div class="fallback">
                                                            <input name="product_image[]" type="file" multiple/>

                                                            @error('product_image')
                                                            <div class="text-danger fw-semibold">{{$message}}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="dz-message needsclick">
                                                            <div class="mb-3">
                                                                <i
                                                                    class="display-4 text-muted mdi mdi-cloud-download-outline"></i>
                                                            </div>

                                                            <h4>Drop files here or click to upload.</h4>
                                                        </div>
                                                    </div>

                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                        <li class="previous"><a href="#"><i
                                                                    class="mdi mdi-arrow-left me-1"></i> Basic Info</a>
                                                        </li>
                                                        <li class="next"><a href="#">Meta Data <i
                                                                    class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="metadata">
                                                    <h4 class="header-title">Meta Data</h4>
                                                    <p class="card-title-desc">Fill all information below</p>


                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="product_meta_title">Meta
                                                                    title</label>
                                                                <input id="product_meta_title" name="product_meta_title"
                                                                       type="text"
                                                                       class="form-control"
                                                                       placeholder="Enter meta title"
                                                                       value="">
                                                                @error('product_meta_title')
                                                                <div class="text-danger fw-semibold">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="product_meta_keyword">Meta
                                                                    Keywords</label>
                                                                <input id="product_meta_keyword"
                                                                       name="product_meta_keyword"
                                                                       type="text" class="form-control"
                                                                       placeholder="Enter keywords">
                                                                @error('product_meta_keyword')
                                                                <div class="text-danger fw-semibold">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="product_meta_description">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="product_meta_description"
                                                                  rows="5"
                                                                  placeholder="Enter Description"
                                                                  name="product_meta_description"></textarea>
                                                        @error('product_meta_description')
                                                        <div class="text-danger fw-semibold">{{$message}}</div>
                                                        @enderror
                                                    </div>

                                                    <!-- end form -->
                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                        <li class="previous">
                                                            <a href="#">
                                                                <i
                                                                    class="mdi mdi-arrow-left me-1"></i> Product Img
                                                            </a>
                                                        </li>
                                                        <li class="float-end"><input type="submit"
                                                                                     class="btn btn-md btn-primary"
                                                                                     value="Save Changes"> <i
                                                                class="mdi mdi-arrow-right ms-1"></i></li>
                                                    </ul>
                                                    <!-- end ul -->
                                                </div>
                                                <!-- end tabpane -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        {{--   <div class="main-content">

       {{--        <div class="page-content">--}}

        {{--            <!-- start page title -->--}}
        {{--            <div class="page-title-box">--}}
        {{--                <div class="container-fluid">--}}
        {{--                    <div class="row align-items-center">--}}
        {{--                        <div class="col-sm-6">--}}
        {{--                            <div class="page-title">--}}
        {{--                                <h4>Product Management</h4>--}}
        {{--                                <ol class="breadcrumb m-0">--}}
        {{--                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>--}}
        {{--                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Production</a></li>--}}
        {{--                                    <li class="breadcrumb-item active">Add Product</li>--}}
        {{--                                </ol>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-sm-6">--}}
        {{--                            <div class="float-end d-none d-sm-block">--}}
        {{--                                <a href="/admin" class="btn btn-success">Dashboard</a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <!-- end page title -->--}}


        {{--            <div class="container-fluid">--}}

        {{--                <div class="page-content-wrapper">--}}

        {{--                    <div class="row">--}}
        {{--                        <div class="col-lg-12">--}}
        {{--                            <div class="card">--}}
        {{--                                <div class="card-body">--}}

        {{--                                    <div class="my-4">--}}
        {{--                                        <h4 class="header-title">Basic Information </h4>--}}
        {{--                                        <p class="card-title-desc">General imformation about what you selling</p>--}}
        {{--                                    </div>--}}

        {{--                                    --}}{{--product name --}}
        {{--                                    <div class="row mb-3 ">--}}
        {{--                                        <div class="col-lg-6 col-md-12 col-sm-12 d-lg-flex flex-wrap w-100 my-2">--}}
        {{--                                            <label for="product_name" class="col-sm-2 col-form-label">Name</label>--}}
        {{--                                            <div class="col-sm-10">--}}
        {{--                                                <input class="form-control" type="text" placeholder="Macbook pro 16" id="product_name">--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="col-lg-6 col-md-12 col-sm-12 d-lg-flex flex-wrap w-100 my-2">--}}
        {{--                                            <label class="col-sm-2 col-form-label">Category</label>--}}
        {{--                                            <div class="col-sm-10">--}}
        {{--                                                <select class="form-select" aria-label="Default select example">--}}
        {{--                                                    <option selected="">Choose the product category</option>--}}
        {{--                                                    <option value="1">Dress</option>--}}
        {{--                                                    <option value="2">Electronics</option>--}}
        {{--                                                    <option value="3">Trees</option>--}}
        {{--                                                </select>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    --}}{{--product Category --}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="product_brand" class="col-sm-2 col-form-label">Brand</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="text" placeholder="Apple" id="product_brand" name="product_brand">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                    --}}{{--product Description --}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="product_description" class="col-sm-2 col-form-label">Description</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="text" placeholder="A little about about your product" id="product_description" name="product_description">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}



        {{--                                    <div class="my-5">--}}
        {{--                                        <h4 class="header-title">Selling Information </h4>--}}
        {{--                                        <p class="card-title-desc">give imformation about price,stock and discounts</p>--}}
        {{--                                    </div>--}}
        {{--                                    --}}{{--product Quantity --}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="number" placeholder="23" id="quantity" name="product_quantity">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    --}}{{--product Price orignal --}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="product_price" class="col-sm-2 col-form-label">Orignal Price</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="number" placeholder="$565" id="product_price">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    --}}{{--product price discounted --}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="product_price_discount" class="col-sm-2 col-form-label">Discounted Price</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="number" name="product_price_discount"  placeholder="$520" id="product_price_discount">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="product_featured_image" class="col-sm-2 col-form-label">Featured image</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="file" id="product_featured_image">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="my-5">--}}
        {{--                                        <h4 class="header-title">Basic Information </h4>--}}
        {{--                                        <p class="card-title-desc">General imformation about what you selling</p>--}}
        {{--                                    </div>--}}









        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="month" value="2020-03" id="example-month-input">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="week" value="2020-W14" id="example-week-input">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <input type="color" class="form-control form-control-color w-100" id="example-color-input" value="#5664d2" title="Choose your color">--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="row mb-3">--}}
        {{--                                        <label class="col-sm-2 col-form-label">Select</label>--}}
        {{--                                        <div class="col-sm-10">--}}
        {{--                                            <select class="form-select" aria-label="Default select example">--}}
        {{--                                                <option selected="">Open this select menu</option>--}}
        {{--                                                <option value="1">One</option>--}}
        {{--                                                <option value="2">Two</option>--}}
        {{--                                                <option value="3">Three</option>--}}
        {{--                                            </select>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <!-- end row -->--}}

        {{--                </div>--}}


        {{--            </div> <!-- container-fluid -->--}}
        {{--        </div>--}}
        <!-- End Page-content -->


        <x-partials.admin-footer/>
    </div>
    <!-- end main content-->


    <!-- ============================================================== -->


</x-layouts.admin>
