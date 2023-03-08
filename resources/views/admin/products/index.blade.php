<<<<<<< Updated upstream
=======
<x-layouts.admin>
    {{--    @dd($categories) --}}
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
                                    <form action="{{ route('products.store') }}" enctype="multipart/form-data" --}}
                                        method="POST">
                                        @csrf

                                        <h4 class="header-title">Add New Products</h4>
                                        <p class="card-title-desc">You can add products here</p>
                                        <div class="row">

                                            <div class="col-12 mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter product name" id="example-text-input"
                                                        name="name">
                                                    @error('name')
                                                        <div class="text-danger"></div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="control-label"> Product Category</label>
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
                                                    @error('product_options')
                                                        <div class="text-danger fw-semibold">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="example-text-input-file"
                                                    class="col-sm-2 col-form-label">Product Image</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="file"
                                                        id="example-text-input-file" name="product_image">
                                                    @error('product_image')
                                                        <div class="text-danger"></div>
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
                           
                            <div id="cat_attribute">

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
>>>>>>> Stashed changes
