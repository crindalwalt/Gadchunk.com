<x-layouts.admin>
    {{--    @dd($categories) --}}
    <!-- ============================================================== -->
    {{--    @include('sweetalert::alert') --}}

    @include('sweetalert::alert')
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Customers</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Customer</a></li>
                                    <li class="breadcrumb-item active">Customer Management</li>
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



                    <!-- Filters bar for product -->
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">All Users</h4>
                                    <div class="table-responsive">
                                        @if ($users->isNotEmpty())
                                            <table class="table  mb-0" id="myTable">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone #</th>
                                                        <th>UserType </th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                @if ($user->profile_image)
                                                                <img src="{{ asset('storage/avatar_images/'. $user->profile_image) }}"
                                                                alt="avatar"
                                                                class="rounded-circle img-fluid"
                                                                style="width: 35px;">
                                                                @else
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                                                 alt="avatar"
                                                                 class="rounded-circle img-fluid"
                                                                 style="width: 35px;">

                                                                @endif
                                                                {{ $user->name }}
                                                            </td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ $user->phone }}</td>
                                                            @if ($user->userType == 1)
                                                                <td>User</td>
                                                            @else
                                                                <td>Admin</td>
                                                            @endif
                                                            <td>
                                                                {{-- <a href="/admin/user/{{$user->id}}" class="btn btn-outline-success btn-sm">Show</a> --}}
                                                                {{-- <form class="d-inline" action="/admin/user/{{$user->id}}/edit" method="GET">
                                                                @csrf --}}
                                                                <button type="button"
                                                                    class="btn btn-outline-primary btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#detail{{ $user->id }}">Details</button>
                                                                <div class="modal fade" id="detail{{ $user->id }}"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog " style="min-width:60%;">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">
                                                                                    {{ $user->name }}</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row justify-content-around">
                                                                                    <div class="col-lg-4">
                                                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                                                                            alt="avatar"
                                                                                            class="rounded-circle img-fluid"
                                                                                            style="width: 150px;">
                                                                                    </div>
                                                                                    <div class="col-lg-8">
                                                                                        <div class="card mb-4">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-sm-3">
                                                                                                        <p
                                                                                                            class="mb-0">
                                                                                                            Full Name
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-9">
                                                                                                        <p
                                                                                                            class="text-muted mb-0">
                                                                                                            {{ $user->name }}</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-sm-3">
                                                                                                        <p
                                                                                                            class="mb-0">
                                                                                                            Email</p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-9">
                                                                                                        <p
                                                                                                            class="text-muted mb-0">
                                                                                                            {{ $user->email }}
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-sm-3">
                                                                                                        <p
                                                                                                            class="mb-0">
                                                                                                            Phone</p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-9">
                                                                                                        <p
                                                                                                            class="text-muted mb-0">
                                                                                                           {{ $user->phone }}</p>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-sm-3">
                                                                                                        <p
                                                                                                            class="mb-0">
                                                                                                            Address</p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-9">
                                                                                                        <p
                                                                                                            class="text-muted mb-0">
                                                                                                            {{ $user->street ? $user->street : "street #" }},
                                                                                                            {{ $user->city ? $user->city : "city" }},
                                                                                                            {{ $user->province ? $user->province : "province" }},
                                                                                                            {{ $user->country ? $user->country : "country" }}
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    @if ($user->userType == 0)
                                                                        <a href="{{ route('admin.profile') }}"><button
                                                                                type="submit"
                                                                                class="btn btn-outline-primary btn-sm">Edit</button>
                                                                        </a>
                                                                    @endif
                                                                    {{-- </form> --}}
                                                                    <form class="d-inline"
                                                                        action="{{ route('admin.profile.destroy', $user->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-outline-danger btn-sm">Delete</button>
                                                                    </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <div
                                                class="text-center text-warning text-lg font-size-24 font-semibold d-flex justify-content-center align-items-center
                                        ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    fill="currentColor" class="bi bi-exclamation-triangle-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                </svg>
                                                <span class="mx-3">
                                                    No users to show <br>

                                                </span>
                                            </div>


                                        @endif
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>






                    </div>
                    <!-- end row -->

                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->





        <x-partials.admin-footer />
    </div>









    <!-- ============================================================== -->




</x-layouts.admin>
