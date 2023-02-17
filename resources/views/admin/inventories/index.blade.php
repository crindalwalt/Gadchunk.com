<x-layouts.admin>
    {{-- @dd($attributes ) --}}
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
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('inventory.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf

                                        <h4 class="header-title">Add Products</h4>
                                        <p class="card-title-desc">You can add products here</p>
                                        <div class="row">

                                            <div class="col-12 mb-3">
                                                <label class="control-label">Product Name</label>
                                                <select name="product_id" class="form-control select2">
                                                    <option>Select</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}"
                                                            class="d-flex justify-content-between">
                                                            {{ $product->name }}
                                                            <small
                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('product_id')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label class="control-label">Product Type</label>
                                                <select name="product_type_id" class="form-control select2">
                                                    <option>Select</option>
                                                    @foreach ($types as $type)
                                                        <option value="{{ $type->id }}"
                                                            class="d-flex justify-content-between">
                                                            {{ $type->name }}
                                                            <small
                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('product_type_id')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-6 mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Retail
                                                    Price</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter retail price" id="example-text-input"
                                                        name="retail_price">
                                                    @error('retail_price')
                                                        <div class="text-danger"></div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6 mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Store
                                                    Price</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter store price" id="example-text-input"
                                                        name="store_price">
                                                    @error('store_price')
                                                        <div class="text-danger"></div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Stock
                                                    Available</label>
                                                <span><input type="checkbox" name="in_stock"></span>
                                                @error('in_stock')
                                                    <div class="text-danger"></div>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">Status</label>
                                                <span><input type="checkbox" name="is_active"></span>
                                                @error('is_active')
                                                    <div class="text-danger"></div>
                                                @enderror
                                            </div>
                                            {{-- <div class="col-6 mb-3">
                                                <label class="control-label">Product Variation</label>
                                                <select name="product_type_id" class="form-control select2" id="variation">
                                                    <option>Select</option>
                                                    @foreach ($attributes as $attribute)
                                                        <option value="{{ $attribute->id }}"
                                                            class="d-flex justify-content-between ">
                                                            {{ $attribute->attribute_name }}
                                                            <small
                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('product_type_id')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label class="control-label">Variation Values</label>
                                                <select name="product_type_id" class="form-control select2" id="variation_value">
                                                    <option>Select</option>
                                                    @foreach ($values as $value)
                                                        <option value="{{ $value->id }}" 
                                                            class="d-flex justify-content-between ">
                                                            {{ $value->attribute_value}}
                                                            <small
                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('product_type_id')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div> --}}
                                            <div class="card">
                                                <h2 class="header-title text-center mb-3 font-weight-bold">Manage
                                                    Variation</h2>
                                                    
                                            <div class="col-6 mb-3">
                                                <label class="control-label">Product Weight</label>
                                                <select name="weight_id" class="form-control select2">
                                                    <option>Select</option>
                                                    @foreach ($weights as $weight)
                                                        <option value="{{ $weight->id }}"
                                                            class="d-flex justify-content-between">
                                                            {{ $weight->name }}{{ $weight->abbreviation }}
                                                            <small
                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('weight_id')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-6 mb-3">
                                                <label class="control-label">Product Brand</label>
                                                <select name="brand_id" class="form-control select2">
                                                    <option>Select</option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}"
                                                            class="d-flex justify-content-between">
                                                            {{ $brand->name }}
                                                            <small
                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('brand_id')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>
                                                @foreach ($attributes as $attr)
                                                    <div class="col-4 mb-3">
                                                        <label class="control-label">{{$attr->attribute_name}}</label>
                                                        <select name="{{$attr->attribute_name}}.'[]'" class="form-control select2">
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
                                                            <div class="text-danger fw-semibold">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                @endforeach

                                            </div>




                                        </div>
                                        <div class="row mb-3">
                                            <div class="#">
                                                <input class="btn btn-lg px-4 py-2 btn-primary" type="submit"
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
                                                            <td>{{ $inv->store_price }}</td>
                                                            <td>{{ $inv->is_active }}</td>

                                                            <td class="">
                                                                <a href="/admin/collection/"
                                                                    class="btn btn-outline-success btn-sm">Show</a>

                                                                <form action="" method="POST" class="d-inline">
                                                                    @csrf
                                                                    <input type="hidden" value=""
                                                                        name="id">
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
                                                            class="bi bi-exclamation-triangle-fill"
                                                            viewBox="0 0 16 16">
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
