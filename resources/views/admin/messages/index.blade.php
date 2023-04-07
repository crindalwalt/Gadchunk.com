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
                                    
                                                <h4 class="header-title mb-4">All Messages From Site Users</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">No.</th>
                                                                <th scope="col">User Register</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Message</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($messages as $message)
                                                                <tr>
                                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                                    <td>{{ $message->user->name }}</td>
                                                                    <td>{{ $message->name }}</td>
                                                                    <td>{{ $message->email }}</td>
                                                                    <td>{{ $message->subject }}</td>
                                                                    <td>{{ $message->message }}</td>
                                                                   
                                                               
                                                            @endforeach
                                                        </tbody>
            
                                                    </table>
            
                                                </div>
                                                <!-- end table-responsive -->
                                        
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
