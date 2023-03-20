
<x-layouts.admin>
    {{--    @dd($categories)--}}
    <!-- ============================================================== -->
    {{--    @include('sweetalert::alert')--}}

    @include('sweetalert::alert')
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Orders</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
                                    <li class="breadcrumb-item active">Order Management</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="" class="btn btn-success">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="container-fluid">

                <div class="page-content-wrapper">

                    <div class="col-xl-12">
                        <div class="row">
                            {{-- All Orders --}}
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16"> All Orders</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                        </span>
                                            </div>
                                            <h5 class="font-size-22">58</h5>

                                            <p class="text-muted">Order you recieved</p>

                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- Pending Orders --}}
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16">Pending Orders</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                    <span class="avatar-title rounded-circle bg-soft-success">
                                                            <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                                        </span>
                                            </div>
                                            <h5 class="font-size-22">18</h5>

                                            <p class="text-muted">Order waiting to proceed</p>

                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- Delivered Orders --}}
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16">Delivered Order</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                    <span class="avatar-title rounded-circle bg-soft-success">
                                                            <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                                        </span>
                                            </div>
                                            <h5 class="font-size-22">40</h5>

                                            <p class="text-muted">Order you have completed</p>

                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                    <!-- Filters bar for product -->
                    <div class="row">


                        {{-- <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">All Orders</h4>
                                    <div class="table-responsive">
                                         @if($products->isNotEmpty())
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product</th>

                                                    <th>Category</th>
                                                    <th>Stock</th>
                                                    <th>Sold </th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td><img src="{{ asset('storage/' . $product->productImage[0]->image) }}" width="42" class="me-3" alt="">{{ $product->name   }}</td>
                                                        <td>{{ $product->category->name   }}</td>
                                                        <td>{{ $product->stock }}</td>
                                                        <td>22</td>

                                                        <td>
                                                            <a href="/admin/product/{{$product->id}}" class="btn btn-outline-success btn-sm">Show</a>
                                                            <form class="d-inline" action="/admin/product/{{$product->id}}/edit" method="GET">
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-primary btn-sm">Edit</button>
                                                            </form>
                                                            <form class="d-inline" action="/admin/product/{{$product->id}}/delete" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                                            </form>


                                                        </td>
                                                    </tr>
                                                @endforeach








                                                </tbody>
                                            </table>
                                        @else
                                            <div class="text-center text-warning text-lg font-size-24 font-semibold d-flex justify-content-center align-items-center
                                        ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                                <span class="mx-3">
                                                No Products to show <br>

                                            </span>
                                            </div>


                                        @endif
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Products of the Month</h4>
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Product</th>

                                                <th>Customer</th>
                                                <th>Price</th>
                                                <th>Invoice</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>#2356</td>
                                                <td><img src="assets/images/product/img-7.png" width="42" class="me-3" alt="">Green Chair</td>
                                                <td>Kenneth Gittens</td>
                                                <td>$200.00</td>
                                                <td>42</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2564</td>
                                                <td><img src="assets/images/product/img-8.png" width="42" class="me-3" alt="">Office Chair</td>
                                                <td>Alfred Gordon</td>
                                                <td>$242.00</td>
                                                <td>54</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                                </td>
                                            </tr>



                                            <tr>
                                                <td>#2125</td>
                                                <td><img src="assets/images/product/img-10.png" width="42" class="me-3" alt="">Gray Chair</td>
                                                <td>Keena Reyes</td>
                                                <td>$320.00</td>
                                                <td>65</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#8587</td>
                                                <td><img src="assets/images/product/img-11.png" width="42" class="me-3" alt="">Steel Chair</td>
                                                <td>Timothy Zuniga</td>
                                                <td>$342.00</td>
                                                <td>52</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2354</td>
                                                <td><img src="assets/images/product/img-12.png" width="42" class="me-3" alt="">Home Chair</td>
                                                <td>Joann Wiliams</td>
                                                <td>$320.00</td>
                                                <td>25</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                </td>
                                            </tr>


                                            </tbody>
                                        </table>
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
