<x-layouts.admin>
    {{-- @dd($categories->all()) --}}
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
                                <h4>Product Inventory</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/collections">Product Inventory</a></li>
                                    <li class="breadcrumb-item active">Manage Inventory</li>
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
                            <div class="card" id="product_div_'1">
                                <div class="card-body">
                                    <form action="{{ route('inventory.update',$product->id) }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf

                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <h4 class="header-title">Update <b>{{ $product->name }}</b> Inventory  <span
                                                class="d-inline-block badge bg-secondary text-white mx-1 px-1 ">{{ $product->category->name }}</span>
                                        </h4>
                                        <p class="card-title-desc">{{ $product->description }}</p>

                                        <div class="bg-soft " id="add_div">
                                            <div class="row">

                                                {{-- <h5 class="header-title">Managing Inventory for
                                                    Choose Available Attribute
                                                </h5> --}}
                                                @php
                                                    $array = $product->category->attributes;
                                                @endphp
                                                @foreach ($array as $attr)
                                                    <div class="col-6 mb-3">
                                                        <label class="control-label">{{ $attr->attribute_name }}</label>
                                                        <select name="{{ 'attribute' . '[]' }}"
                                                            id="attr_{{ $attr->id }}" class="form-control select2"
                                                            multiple>
                                                            @php
                                                                $array_next = $attr->prod_attribute_value;
                                                            @endphp
                                                            <option value="{{ null }}">Select an option
                                                            </option>
                                                            @foreach ($array_next as $value)
                                                                <option value="{{ $value->id }}"
                                                                    id="options_{{ $value->id }}"
                                                                    class="d-flex justify-content-between ">
                                                                    {{ $value->attribute_value }}
                                                                    <small
                                                                        class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error("{{ $attr->attribute_name }}")
                                                            <div class="text-danger fw-semibold">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                @endforeach

                                                <div class="col-6 mb-3">
                                                    <label for="example-text-input"
                                                        class="col-sm-6 col-form-label">Retail
                                                        Price</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" value="{{ $product->prod_inventory->retail_price }}"
                                                            placeholder="Enter retail price" id="example-text-input"
                                                            name="retail_price">
                                                        @error('retail_price')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label for="example-text-input"
                                                        class="col-sm-6 col-form-label">Discount
                                                        Price</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" value="{{ $product->prod_inventory->discount_price }}"
                                                            placeholder="Enter store price(if any)"
                                                            id="example-text-input" name="discount_price">
                                                        @error('discount_price')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label for="example-text-input"
                                                        class="col-sm-6 col-form-label">Stock
                                                    </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" value="{{ $product->prod_inventory->stock }}"
                                                            placeholder="Enter store price" id="example-text-input"
                                                            name="stock">
                                                        @error('stock')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12 mb-3">
                                                    <label for="example-text-input"
                                                        class="col-sm-6 col-form-label">Product Image
                                                    </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="file"
                                                            placeholder="Enter store price" id="example-text-input"
                                                            name="product_image[]" multiple>
                                                        @error('product_image[]')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- <button  type="button" class="btn btn-success col-md-2 float-end m-4" onclick="add_more({{$array}},{{$array_next}})">Add</button> --}}

                                            </div>
                                        </div>
                                </div>
                                <div class="container">
                                    <div class="  form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="in_stock"
                                            id="flexSwitchCheckChecked" checked>
                                            @error('in_stock')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <label class="form-check-label" for="flexSwitchCheckChecked">In
                                            Stock</label>
                                    </div>
                                    <div class="  form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="on_sale"
                                            id="flexSwitchCheckChecked1" checked>
                                            @error('on_sale')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <label class="form-check-label" for="flexSwitchCheckChecked1">On Sale</label>
                                    </div>
                                    <div class="  form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="is_featured"
                                            id="flexSwitchCheckChecked2" checked>
                                            @error('is_featured')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <label class="form-check-label" for="flexSwitchCheckChecked2">Featured</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="#">
                                        <input class="btn btn-lg px-4 py-2 btn-primary m-3" type="submit"
                                            value="Update" id="example-email-input">

                                    </div>
                                </div>

                                </form>

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


</x-layouts.admin>
