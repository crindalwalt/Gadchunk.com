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
                                    <form action="{{ route('inventory.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf

                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <h4 class="header-title">Managing Inventory for <b>{{ $product->name }}</b><span
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
                                                            id="attr_{{ $attr->id }}" class="form-control select2" multiple>
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
                                                        <input class="form-control" type="text"
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
                                                        <input class="form-control" type="text"
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
                                                        <input class="form-control" type="text"
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
                                        <label class="form-check-label" for="flexSwitchCheckChecked">In
                                            Stock</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="#">
                                        <input class="btn btn-lg px-4 py-2 btn-primary m-3" type="submit"
                                            value="Add to Inventory" id="example-email-input">

                                    </div>
                                </div>

                                </form>

                            </div>

                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Inventory Products</h4>
                                <p class="card-title-desc">All of the below Inventory Products are fetched from the
                                    DateBase</p>
                                <div class="table-responsive">

                                    <table class="table mb-0">
                                        @if ($inventories->isNotEmpty())
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> Name</th>
                                                    <th> Retail Price</th>
                                                    <th> Retail Price</th>
                                                    <th> Stock Price</th>
                                                    <th> Status</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($inventories as $inv)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $inv->product_id }}</td>
                                                        <td>{{ $inv->retail_price }}</td>
                                                        <td>{{ $inv->discount_price }}</td>
                                                        <td>{{ $inv->store_price }}</td>
                                                        <td>{{ $inv->in_stock }}</td>

                                                        <td class="">
                                                            <a href="/admin/collection/"
                                                                class="btn btn-outline-success btn-sm">Show</a>

                                                            <form action="" method="POST" class="d-inline">
                                                                @csrf
                                                                <input type="hidden" value="" name="id">
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-outline-danger">Delete</button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            @else
                                                <div
                                                    class="text-center text-warning text-lg font-size-24 font-semibold d-flex justify-content-center align-items-center
                                            ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" fill="currentColor"
                                                        class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                    </svg>
                                                    <span class="mx-3">
                                                        Inventory Products Unavailable <br>

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


</x-layouts.admin>
