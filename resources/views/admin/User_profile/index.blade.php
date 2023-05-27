<x-layouts.admin>
    {{-- @dd($user) --}}
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
                                <h4>Profile Page</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/category">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Admin Profile</li>
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

                                    <div class="container shadow rounded bg-white mt-5 mb-5">
                                        <div class="row">
                                            <div class="col-md-3 border-right">
                                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                                        class="rounded-circle mt-5" width="150px"
                                                        src="{{ Auth::user()->profile_image ? asset('storage/avatar_images/' . Auth::user()->profile_image)  : asset('assets/img/users/user-10.jpg') }}"><span
                                                        class="font-weight-bold">{{ $user->name }}</span><span
                                                        class="text-black-50">{{ $user->email }}</span><span> </span></div>
                                            </div>
                                            <div class="col-md-9 border-right">
                                                <div class="p-3 py-5">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h4 class="text-right">Profile Setting</h4>
                                                    </div>
                                                    <form action="{{ route('admin.profile.update', $user->id) }}" method="POST">
                                                        @csrf
                                                        <div class="form-group row my-3">
                                                            <label for="inputname" class="col-sm-3 col-form-label text-dark">UserName</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"  class="form-control" id="inputname" name="name"
                                                                    value="{{ $user->name }}">
                                                                    @error('name')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row my-3">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label text-dark">Email</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="staticEmail" name="email"
                                                                    value="{{ $user->email }}">
                                                                    @error('email')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row my-3">
                                                            <label for="inputphone" class="col-sm-3 col-form-label text-dark">Contact #</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="inputphone" name="phone"
                                                                    value="{{ $user->phone }}">
                                                                    @error('phone')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row my-3">
                                                            <label for="inputPassword"
                                                                class="col-sm-3 col-form-label text-dark">Old Password</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" class="form-control" id="inputPassword" name="old_password"
                                                                    placeholder="Old Password">
                                                                    @error('old_password')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row my-3">
                                                            <label for="inputsecondPassword"
                                                                class="col-sm-3 col-form-label text-dark">New Password</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" class="form-control" id="inputsecondPassword" name="new_password"
                                                                    placeholder="New Password">
                                                                    @error('new_password')
                                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                                                type="submit">Update Profile</button></div>
                                                    </form>


                                                </div>
                                            </div>

                                        </div>
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
