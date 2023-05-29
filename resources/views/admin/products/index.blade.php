<x-layouts.admin>
    {{--    @dd($categories) --}}
    <!-- ============================================================== -->
    @include('sweetalert::alert')
    <div class="main-content">


        <div class="page-content">
            {{-- @dd($products[0]) --}}
            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Add Product</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/category">Product</a></li>
                                    <li class="breadcrumb-item active">Add Products</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="/admin" class="btn btn-success">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="container-fluid">

                <div class="page-content-wrapper">


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('products.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf

                                        <h4 class="header-title">Add New Products</h4>
                                        <p class="card-title-desc">You can add products in this section</p>
                                        <div class="row">

                                            <div class="col-12 mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter product name" id="example-text-input"
                                                        name="product_name">
                                                    @error('product_name')
                                                        <div class="text-danger  fw-semibold"{{ $message }}></div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="control-label"> Product Sub-Category</label>
                                                <select name="category_id" class="form-control select2 category_attr">
                                                    <option>Select</option>
                                                    
                                                    @foreach ($categories as $cat)
                                                        <option value="{{ $cat->id }}"
                                                            class="d-flex justify-content-between ">
                                                            {{ $cat->name }}
                                                            <small
                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="control-label">Brand</label>

                                                    <select class="select2 form-control select2-multiple"
                                                        name="product_brand">
                                                        <option value="{{ null }}">Select</option>
                                                        @foreach ($brands as $brand)
                                                            <option value="{{ $brand->id }}">{{ $brand->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('product_brand')
                                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="example-text-input-file"
                                                    class="col-sm-2 col-form-label">Product Image</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="file"
                                                        id="example-text-input-file" name="product_image[]">
                                                    @error('product_image')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label class="form-label" for="product_description">Product
                                                    Description</label>
                                                <textarea class="form-control" id="product_description" rows="5" placeholder="Enter Description"
                                                    name="product_description">lorem ipsum</textarea>
                                                @error('product_description')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row mb-3">
                                            <div class="#">
                                                <input class="btn btn-lg px-4 py-2 btn-primary" type="submit"
                                                    value="Add Product" id="example-email-input">
                                            </div>
                                        </div>

                                    </form>

                                </div>

                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Browse all Products</h4>
                                    <p class="card-title-desc">All of the below products are Dynamic</p>
                                    <div class="shadow p-3 mb-5 bg-body rounded text-danger text-center fw-bolder">Note : After Adding Products must manage Inventory to set Price</div>

                                    <div class="table-responsive">

                                        <table class="table mb-0" id="myTable">
                                            @if ($brands->isNotEmpty())
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product name</th>
                                                        <th>Sub-Category </th>
                                                        <th>brand </th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>{{ $product->name }}<br><span
                                                                    class="small">{{ $product->description }}</span>
                                                            </td>

                                                            <td>{{ $product->category->name }}</td>
                                                            <td><img src="{{ asset('storage/product_images/' . $product->featured_image) }}"
                                                                    width="70" height="50"></td>
                                                            <td class="">
                                                                <a href="{{ route('inventory.manage', $product->id) }}"
                                                                    class="btn btn-outline-primary btn-sm">Manage
                                                                    Inventory</a>
{{--
                                                                <a href="{{ route('products.edit', $product->id) }}"
                                                                    class="btn btn-outline-success btn-sm">Edit</a> --}}

                                                                <form action="{{ route('products.destroy',$product->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    <input type="hidden" value="{{ $product->id }}"
                                                                        name="id">
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-outline-danger">Delete</button>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                @else
                                                {{-- http://127.0.0.1:8000/storage/product_images --}}
                                                    <div
                                                        class="text-center text-warning text-lg font-size-24 font-semibold d-flex justify-content-center align-items-center
                                        ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                            height="30" fill="currentColor"
                                                            class="bi bi-exclamation-triangle-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                        </svg>
                                                        <span class="mx-3">
                                                            No Products to show <br>

                                                        </span>
                                                    </div>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                </div>


            </div> <!-- container-fluid -->
        </div>
        <x-partials.admin-footer />
    </div>









    <!-- ============================================================== -->




</x-layouts.admin>
