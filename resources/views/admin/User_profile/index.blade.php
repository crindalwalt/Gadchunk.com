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

                                    <div class="row">
                                        <div class="col-md-4 border-right">
                                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                                    class="rounded-circle mt-5" width="150px"
                                                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                                                    class="font-weight-bold">{{ $user->name }}</span><span
                                                    class="text-black-50">{{ $user->email }}</span><span> </span></div>
                                        </div>
                                        <div class="col-md-8 border-right">
                                            <div class="p-3 py-5">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h4 class="text-right">Profile Settings</h4>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12"><label class="labels">Name</label><input
                                                            type="text" class="form-control"
                                                            value="{{ $user->name }}"></div>
                                                    <div class="col-md-12"><label
                                                            class="labels mt-2">Email</label><input type="text"
                                                            class="form-control" value="{{ $user->email }}"></div>
                                                    <div class="col-md-12"><label
                                                            class="labels mt-2">Password</label><input type="password"
                                                            class="form-control" value="{{ $user->password }}"></div>
                                                    <div class="col-md-12"><label class="labels mt-2">Mobile
                                                            Number</label><input type="text"
                                                            class="form-control"value="{{ $user->phone }}"></div>
                                                    <div class="col-md-12"><label class="labels mt-2">Role</label><input
                                                            type="text" class="form-control"
                                                            @if ($user->role == 0) value="Admin" @endif
                                                            value="User">
                                                    </div>

                                                </div>
                                                {{-- <div class="row mt-3">
                                                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                                                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                                                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                                                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                                                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                                                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                                                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                                                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                                                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                                                </div> --}}
                                                <div class="mt-5 text-center"><button
                                                        class="btn btn-primary profile-button" type="button">Save
                                                        Profile</button></div>
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
