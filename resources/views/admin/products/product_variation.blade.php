<x-layouts.admin>
    {{-- @dd($products) --}}
    <!-- ============================================================== -->
    @include('sweetalert::alert')
    <div class="main-content">
        <div class="page-content">
            {{-- <td> --}}
            <!-- Small modal -->







            {{-- <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Modal demo</button> --}}
            {{-- <div class="modal fade bs-example-modal-center modalForAttrDel" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Center modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Cras mattis consectetur purus sit amet fermentum.
                                    Cras justo odio, dapibus ac facilisis in,
                                    egestas eget quam. Morbi leo risus, porta ac
                                    consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et. Vivamus sagittis lacus vel
                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                    Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et. Donec sed odio dui. Donec
                                    ullamcorper nulla non metus auctor
                                    fringilla.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal --> --}}
            {{-- </td> --}}{{-- Modals end --}}










            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Manage Products Variation</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/collections">Products</a></li>
                                    <li class="breadcrumb-item active">Manage Products Variation</li>
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
                                    <form action="{{ route('prod_variation_value.store') }}"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf

                                        <h4 class="header-title">Add Products Variation</h4>
                                        <p class="card-title-desc">You can add products variation here</p>
                                        <div class="row">

                                            <div class="col-12 mb-3">
                                                <label for="example-text-input" class="col-sm-12 col-form-label">Product
                                                    Variation Name</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter product variation i.e color,size etc "
                                                        id="example-text-input" name="attribute_name">
                                                    @error('attribute_name')
                                                        <div class="text-danger">{{$message  }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-12 col-form-label">Description</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter description" id="example-text-input"
                                                        name="attribute_description">
                                                    @error('attribute_description')
                                                    <div class="text-danger">{{$message  }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-12 col-form-label">Attribute Icon</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="file"
                                                        placeholder="" id="example-text-input"
                                                        name="attribute_icon">
                                                    @error('attribute_icon')
                                                    <div class="text-danger">{{$message  }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="#">
                                                <input class="btn btn-lg px-4 py-2 btn-primary" type="submit"
                                                    value="Add Variation" id="example-email-input">
                                            </div>
                                        </div>

                                    </form>

                                </div>

                            </div>
                            {{-- Product variation values  --}}
                            {{-- <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('prod_variation_value.store') }}"
                                        enctype="multipart/form-data" method="POST" multiple>
                                        @csrf

                                        <h4 class="header-title">Add Variation Attribute</h4>
                                        <p class="card-title-desc">You can add variation attribute here</p>
                                        <div class="row">

                                            <div class="col-12 mb-3">
                                                <label class="control-label">Product Variation</label>
                                                <select name="product_attribute_id" class="form-control select2">
                                                    <option>Select</option>
                                                    @foreach ($variations as $var)
                                                        <option value="{{ $var->id }}"
                                                            class="d-flex justify-content-between">
                                                            {{ $var->attribute_name }}
                                                            <small
                                                                class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('product_attribute_id')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">Variation value</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter attribute value..." id="example-text-input"
                                                        name="attribute_value">
                                                    @error('attribute_value')
                                                        <div class="text-danger"></div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter description..." id="example-text-input"
                                                        name="description">
                                                    @error('description')
                                                        <div class="text-danger"></div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mb-3">
                                            <div class="#">
                                                <input class="btn btn-lg px-4 py-2 btn-primary" type="submit"
                                                    value="Add" id="example-email-input">
                                            </div>
                                        </div>

                                    </form>

                                </div>

                            </div> --}}

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Browse All Variation</h4>
                                    <p class="card-title-desc">All of the below Products variation are fetched from the
                                        DateBase</p>
                                    <div class="table-responsive">

                                        <table class="table mb-0 table-hover">
                                            @if ($variations->isNotEmpty())
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Variation Name</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($variations as $var)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>{{ $var->attribute_name }}</td>
                                                            <td class="">




                                                                <a href="#"
                                                                    class="btn btn-outline-success btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalForAttrDel-{{ $var->id }}">Add
                                                                    Values</a>
                                                                <a href="#"
                                                                    class="btn btn-outline-warning btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalForAttrShow-{{ $var->id }}">Show</a>

                                                                <x-partials.variation_add :var="$var">
                                                                </x-partials.variation_add>
                                                                <x-partials.variation_show :var="$var" />
                                                                <form
                                                                    action="{{ route('prod_variation_value.destroy') }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    <input type="hidden" value="{{ $var->id }}"
                                                                        name="attr_id">
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
                                                            No Products Variation to show <br>

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

                <script>
                    let variationOptions = [];
                    var common_id = null;

                    function formroku(id) {
                        let variationOptionForm = document.querySelector(`#variationOptionForm-${id}`)
                        variationOptionForm.addEventListener("submit", (e) => {
                            // e.preventDefault();
                            // console.log(variationOptionForm)
                                let hidden_input = document.querySelector(`#options-${id}`);
                                hidden_input.value = variationOptions
                                console.log(hidden_input);
                        })
                    }

                    function commaSeparation(id) {
                        // alert(id);
                        // common_id = id;

                        let input = document.querySelector(`#attr_value-${id}`);
                        let outputBox = document.querySelector(`#outputBox-${id}`);
                        let value = input.value;

                        variationOptions.push(value);
                        outputBox.innerHTML += `<li>option: <span class="badge bg-success px-4 m-2">${value}</span></li>`;
                        input.value = ""
                        formroku(id);
                    }
                </script>
            </div> <!-- container-fluid -->
        </div>
        <x-partials.admin-footer />
    </div>









    <!-- ============================================================== -->




</x-layouts.admin>
