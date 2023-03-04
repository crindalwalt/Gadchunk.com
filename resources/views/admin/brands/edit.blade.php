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
                                <h4>Add Brand</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/category">Brand</a></li>
                                    <li class="breadcrumb-item active">Add Brand</li>
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
                                    <form action="{{ route('brand.update', $brand->id) }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <h4 class="header-title">Update Brand Name</h4>
                                        <p class="card-title-desc">You can add product brand here</p>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"
                                                    placeholder="Enter brand name..." id="example-text-input"
                                                    name="name" value="{{ $brand->name }}">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <label for="example-text-input" class="mt-3 col-sm-2 col-form-label">Brand
                                                Icon</label>
                                            <div class="col-sm-10">
                                                <input class="form-control mt-3" type="file" id="example-text-input"
                                                    name="brand_icon">
                                                @error('brand_icon')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <span class="text-danger">Note* Only png,svg image extension is applicable
                                            </span>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="#">
                                                <input class="btn btn-lg px-4 py-2 btn-primary" type="submit"
                                                    value="Update Brand" id="example-email-input">
                                            </div>
                                        </div>

                                    </form>


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
