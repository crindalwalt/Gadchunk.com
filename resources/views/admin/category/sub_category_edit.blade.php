<x-layouts.admin>
    {{--    @dd($categories) --}}
    <!-- ============================================================== -->
    @include('sweetalert::alert')
    <div class="main-content">
        {{-- @dd() --}}

        <div class="page-content">
            {{-- @dd($variations) --}}
            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Edit Sub-Category</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/category">Category</a></li>
                                    <li class="breadcrumb-item active">Edit Sub-Category</li>
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
                                    <form action="{{ route('sub_category.update', $sub_category->id) }}"
                                        method="POST">
                                        @csrf

                                        <h4 class="header-title">Edit Category</h4>
                                        <p class="card-title-desc">You can change product sub-categories here</p>
                                        <div class="row mb-3">
                                            <label for="example-text-input"
                                                class="col-sm-12 col-form-label">Name</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text"
                                                    placeholder="Enter category name..." id="example-text-input"
                                                    name="name" value="{{ $sub_category->name }}">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="control-label">Associated Category</label>

                                                <select class="select2 form-control " 
                                                    name="category_id">
                                                    @foreach ($categories as $cat)
                                                        <option value="{{ $cat->id }}" 
                                                                @if ($sub_category->category_id == $cat->id)
                                                                    selected
                                                                @endif>
                                                            {{ $cat->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="#">
                                                <input class="btn btn-lg px-4 py-2 btn-primary" type="submit"
                                                    value="Update Category" id="example-email-input">
                                            </div>
                                        </div>

                                    </form>
                                    {{--         --}}


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
