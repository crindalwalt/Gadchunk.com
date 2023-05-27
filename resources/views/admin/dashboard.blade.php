<x-layouts.admin>

    <!-- ============================================================== -->





    <!-- Start right Content here -->
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <div class="page-title">
                                <h4>Dashboard</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        {{-- <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="" class="btn btn-success">Add Widget</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="container-fluid">

                <div class="page-content-wrapper">


                    <div class="row">
                        {{-- <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">



                                    <h4 class="header-title mb-4 float-sm-start">Quick Summary</h4>

                                    <div class="float-sm-end">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Day</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Month</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Year</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="clearfix"></div>


                                    <div class="row align-items-center">
                                        <div class="col-xl-9">

                                            <div>
                                                <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                                            </div>

                                        </div>


                                        <div class="col-xl-3">
                                            <div class="dash-info-widget mt-4 mt-lg-0 py-4 px-3 rounded">



                                                <div class="media dash-main-border pb-2 mt-2">
                                                    <div class="avatar-sm mb-3 mt-2">
                                                        <span class="avatar-title rounded-circle bg-white shadow">
                                                            <i
                                                                class="mdi mdi-currency-inr text-primary font-size-18"></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body ps-3">

                                                        <h4 class="font-size-20">$2354</h4>
                                                        <p class="text-muted">Earning <a href="#"
                                                                class="text-primary">Withdraw <i
                                                                    class="mdi mdi-arrow-right"></i></a>
                                                        </p>

                                                    </div>

                                                </div>





                                                <div class="media mt-4 dash-main-border pb-2">
                                                    <div class="avatar-sm mb-3 mt-2">
                                                        <span class="avatar-title rounded-circle bg-white shadow">
                                                            <i
                                                                class="mdi mdi-credit-card-outline text-primary font-size-18"></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body ps-3">
                                                        <h4 class="font-size-20">$1598</h4>
                                                        <p class="text-muted">To Paid <a href="#"
                                                                class="text-primary">Pay <i
                                                                    class="mdi mdi-arrow-right"></i></a></p>
                                                    </div>
                                                </div>



                                                <div class="media mt-4">
                                                    <div class="avatar-sm mb-2 mt-2">
                                                        <span class="avatar-title rounded-circle bg-white shadow">
                                                            <i
                                                                class="mdi mdi-eye-outline text-primary font-size-18"></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body ps-3">
                                                        <h4 class="font-size-20">1230</h4>
                                                        <p class="text-muted mb-0">To Online <a href="#"
                                                                class="text-primary">View <i
                                                                    class="mdi mdi-arrow-right"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div> --}}
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="font-size-16">Collections</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-22">{{ count($collection) }}</h5>

                                                {{-- <p class="text-muted">70% Target</p>

                                                <div class="progress mt-3" style="height: 4px;">
                                                    <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                                        style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                        aria-valuemax="70">
                                                    </div>

                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="font-size-16">Categories</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                    <span class="avatar-title rounded-circle bg-soft-success">
                                                        <i
                                                            class="mdi mdi-account-outline text-success font-size-20"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-22">{{ count($category) }}</h5>

                                                {{-- <p class="text-muted">80% Target</p>

                                                <div class="progress mt-3" style="height: 4px;">
                                                    <div class="progress-bar progress-bar bg-success"
                                                        role="progressbar" style="width: 80%" aria-valuenow="80"
                                                        aria-valuemin="0" aria-valuemax="80">
                                                    </div>

                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Revenue Stastics</h4>

                                    <div class="media">

                                        <h4>$14,235 </h4>


                                        <div class="media-body ps-3">

                                            <div class="dropdown">
                                                <button class="btn btn-light btn-sm dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Today<i class="mdi mdi-chevron-down ms-1"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Yesterday</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">last Month</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div id="stastics-chart"></div>
                                    </div>

                                </div>
                            </div> --}}
                        </div>
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="font-size-16">Product Listed</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-22">{{ count($product) }}</h5>

                                                {{-- <p class="text-muted">70% Target</p>

                                                <div class="progress mt-3" style="height: 4px;">
                                                    <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                                        style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                        aria-valuemax="70">
                                                    </div>

                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="font-size-16">Brands</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                    <span class="avatar-title rounded-circle bg-soft-success">
                                                        <i
                                                            class="mdi mdi-account-outline text-success font-size-20"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-22">{{ count($brand) }}</h5>

                                                {{-- <p class="text-muted">80% Target</p>

                                                <div class="progress mt-3" style="height: 4px;">
                                                    <div class="progress-bar progress-bar bg-success"
                                                        role="progressbar" style="width: 80%" aria-valuenow="80"
                                                        aria-valuemin="0" aria-valuemax="80">
                                                    </div>

                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Revenue Stastics</h4>

                                    <div class="media">

                                        <h4>$14,235 </h4>


                                        <div class="media-body ps-3">

                                            <div class="dropdown">
                                                <button class="btn btn-light btn-sm dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Today<i class="mdi mdi-chevron-down ms-1"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Yesterday</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">last Month</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div id="stastics-chart"></div>
                                    </div>

                                </div>
                            </div> --}}
                        </div>
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="font-size-16">Orders</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-22">{{ count($orders) }}</h5>

                                                {{-- <p class="text-muted">70% Target</p>

                                                <div class="progress mt-3" style="height: 4px;">
                                                    <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                                        style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                        aria-valuemax="70">
                                                    </div>

                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-xl-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="font-size-16">Users</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                    <span class="avatar-title rounded-circle bg-soft-success">
                                                        <i
                                                            class="mdi mdi-account-outline text-success font-size-20"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-22">{{ count($user) }}</h5>

                                                {{-- <p class="text-muted">80% Target</p>

                                                <div class="progress mt-3" style="height: 4px;">
                                                    <div class="progress-bar progress-bar bg-success"
                                                        role="progressbar" style="width: 80%" aria-valuenow="80"
                                                        aria-valuemin="0" aria-valuemax="80">
                                                    </div>

                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            {{-- <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Revenue Stastics</h4>

                                    <div class="media">

                                        <h4>$14,235 </h4>


                                        <div class="media-body ps-3">

                                            <div class="dropdown">
                                                <button class="btn btn-light btn-sm dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Today<i class="mdi mdi-chevron-down ms-1"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Yesterday</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">last Month</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div id="stastics-chart"></div>
                                    </div>

                                </div>
                            </div> --}}
                        </div>



                    </div>

                    {{-- <div class="row">

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title mb-4">Product Traking</h4>


                                    <ul class="list-unstyled activity-wid mb-0">

                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-sm">

                                                <img src="assets/images/users/avatar-7.jpg"
                                                    class="avatar-sm rounded-circle" alt="">

                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                                                    <p class="text-muted font-size-14 mb-0">James Raphael</p>
                                                </div>

                                                <div class="media-body">
                                                    <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                                                class="mdi mdi-timer-outline font-size-15 text-primary"></i>
                                                            3 days</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-sm">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="ti-shopping-cart font-size-16"></i>
                                                </span>
                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h5 class="font-size-15 mb-1">You have 5 pending order.</h5>
                                                    <p class="text-muted font-size-14 mb-0">America</p>
                                                </div>

                                                <div class="media-body">
                                                    <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                                                class="mdi mdi-timer-outline font-size-15 text-primary"></i>
                                                            1 days</p>
                                                    </div>
                                                </div>


                                            </div>
                                        </li>

                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-sm">
                                                <span class="avatar-title bg-soft-success text-success rounded-circle">
                                                    <i class="ti-user font-size-16"></i>
                                                </span>
                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h5 class="font-size-15 mb-1">New Order Received</h5>
                                                    <p class="text-muted font-size-14 mb-0">Thank You</p>
                                                </div>

                                                <div class="media-body">
                                                    <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                                                class="mdi mdi-timer-outline font-size-15 text-primary"></i>
                                                            Today</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-sm">

                                                <img src="assets/images/users/avatar-7.jpg"
                                                    class="avatar-sm rounded-circle" alt="">

                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                                                    <p class="text-muted font-size-14 mb-0">James Raphael</p>
                                                </div>

                                                <div class="media-body">
                                                    <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                                                class="mdi mdi-timer-outline font-size-15 text-primary"></i>
                                                            3 days</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                        <li class="activity-list activity-border">
                                            <div class="activity-icon avatar-sm">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="ti-shopping-cart font-size-16"></i>
                                                </span>
                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h5 class="font-size-15 mb-1">You have 1 pending order.</h5>
                                                    <p class="text-muted font-size-14 mb-0">Dubai</p>
                                                </div>

                                                <div class="media-body">
                                                    <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                                                class="mdi mdi-timer-outline font-size-15 text-primary"></i>
                                                            1 days</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                        <li class="activity-list">
                                            <div class="activity-icon avatar-sm">
                                                <span class="avatar-title bg-soft-success text-success rounded-circle">
                                                    <i class="ti-user font-size-16"></i>
                                                </span>
                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h5 class="font-size-15 mb-1">New Order Received</h5>
                                                    <p class="text-muted font-size-14 mb-0">Thank You</p>
                                                </div>

                                                <div class="media-body">
                                                    <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                                                class="mdi mdi-timer-outline font-size-15 text-primary"></i>
                                                            Today</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Earning Goal</h4>

                                    <div class="mt-2 text-center">


                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mt-4 mt-sm-0">


                                                    <div id="list-chart-1" class="apex-charts" dir="ltr"></div>
                                                    <p class="text-muted mb-2 mt-2 pt-1">Total Earning:</p>
                                                    <h5 class="font-size-18 mb-1">USD 13,545.65</h5>
                                                </div>
                                            </div>



                                            <div class="col-md-6 dash-goal">

                                                <div class="mt-4 mt-sm-0">

                                                    <div id="list-chart-2" class="apex-charts" dir="ltr"></div>

                                                    <p class="text-muted mb-2 mt-2 pt-1">Earning Goal:</p>
                                                    <h5 class="font-size-18 mb-1">USD 84,265.45</h5>


                                                </div>


                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Best Selling Product</h4>



                                    <div id="carouselExampleIndicators" class="carousel slide"
                                        data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">

                                            <div class="carousel-item active">
                                                <div class="row align-items-center mb-5">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/product/img-3.png"
                                                            class="img-fluid me-3" alt="">
                                                    </div>
                                                    <div class="col-md-7 offset-md-1">

                                                        <div class="mt-4 mt-sm-0">
                                                            <p class="text-muted mb-2">Headphone</p>

                                                            <h5 class="text-primary">Blue Headphone</h5>



                                                            <div class="row no-gutters mt-4">

                                                                <div class="col-4">

                                                                    <div class="mt-1">
                                                                        <h4>1200</h4>
                                                                        <p class="text-muted mb-1">Sold</p>
                                                                    </div>

                                                                </div>
                                                                <div class="col-4">

                                                                    <div class="mt-1">
                                                                        <h4>450</h4>
                                                                        <p class="text-muted mb-1">Stock</p>
                                                                    </div>


                                                                </div>

                                                                <div class="col-4">
                                                                    <div class="mt-4 pt-1">
                                                                        <a href=""
                                                                            class="btn btn-primary btn-sm">Buy
                                                                            Now</a>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="row align-items-center mb-5">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/product/img-5.png"
                                                            class="img-fluid me-3" alt="">
                                                    </div>
                                                    <div class="col-md-7 offset-md-1">

                                                        <div class="mt-4 mt-sm-0">
                                                            <p class="text-muted mb-2">T-shirt</p>

                                                            <h5 class="text-primary">Blue T-shirt</h5>



                                                            <div class="row no-gutters mt-4">

                                                                <div class="col-4">

                                                                    <div class="mt-1">
                                                                        <h4>800</h4>
                                                                        <p class="text-muted mb-1">Sold</p>
                                                                    </div>

                                                                </div>
                                                                <div class="col-4">

                                                                    <div class="mt-1">
                                                                        <h4>250</h4>
                                                                        <p class="text-muted mb-1">Stock</p>
                                                                    </div>


                                                                </div>

                                                                <div class="col-4">
                                                                    <div class="mt-4 pt-1">
                                                                        <a href=""
                                                                            class="btn btn-primary btn-sm">Buy
                                                                            Now</a>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>



                                            <div class="carousel-item">
                                                <div class="row align-items-center mb-5">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/product/img-1.png"
                                                            class="img-fluid me-3" alt="">
                                                    </div>
                                                    <div class="col-md-7 offset-md-1">

                                                        <div class="mt-4 mt-sm-0">
                                                            <p class="text-muted mb-2">Sonic</p>

                                                            <h5 class="text-primary">Alarm clock</h5>



                                                            <div class="row no-gutters mt-4">

                                                                <div class="col-4">

                                                                    <div class="mt-1">
                                                                        <h4>600</h4>
                                                                        <p class="text-muted mb-1">Sold</p>
                                                                    </div>

                                                                </div>
                                                                <div class="col-4">

                                                                    <div class="mt-1">
                                                                        <h4>150</h4>
                                                                        <p class="text-muted mb-1">Stock</p>
                                                                    </div>


                                                                </div>

                                                                <div class="col-4">
                                                                    <div class="mt-4 pt-1">
                                                                        <a href=""
                                                                            class="btn btn-primary btn-sm">Buy
                                                                            Now</a>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>







                        </div>


                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title mb-4">Sales by State</h4>

                                    <div id="world-map-markers" style="height: 230px"></div>

                                    <div class="px-4 py-3 mt-4">
                                        <p class="mb-1">USA <span class="float-right">75%</span></p>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary"
                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="75">
                                            </div>
                                        </div>

                                        <p class="mt-3 mb-1">Russia <span class="float-right">55%</span></p>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary"
                                                role="progressbar" style="width: 55%" aria-valuenow="55"
                                                aria-valuemin="0" aria-valuemax="55">
                                            </div>
                                        </div>

                                        <p class="mt-3 mb-1">Australia <span class="float-right">85%</span></p>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary"
                                                role="progressbar" style="width: 85%" aria-valuenow="85"
                                                aria-valuemin="0" aria-valuemax="85">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div> --}}

                    <div class="row">

                        {{-- <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Sales By Social Source

                                    </h4>

                                    <ul class="inbox-wid list-unstyled mb-0">
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="me-3 align-self-center">
                                                        <div class="avatar-sm rounded bg-primary align-self-center">
                                                            <span class="avatar-title">
                                                                <i class="ti-facebook text-white font-size-18"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body overflow-hidden mt-1">
                                                        <h5 class="font-size-15 mb-1">Facebook Ads</h5>
                                                        <p class="text-muted mb-0">3.2k Sale - 4.2k Like</p>
                                                    </div>
                                                    <p class="ms-2 pt-3">
                                                        <i class="mdi mdi-arrow-top-right text-success me-1"></i>50%
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="me-3 align-self-center">
                                                        <div class="avatar-sm rounded bg-info align-self-center">
                                                            <span class="avatar-title">
                                                                <i class="ti-twitter-alt text-white font-size-18"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body overflow-hidden mt-1">
                                                        <h5 class="font-size-15 mb-1">Twitter Ads</h5>
                                                        <p class="text-muted mb-0">3.1k Sale - 3.7k Like</p>
                                                    </div>
                                                    <p class="ms-2 pt-3">
                                                        <i class="mdi mdi-arrow-top-right text-success me-1"></i>45%
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="me-3 align-self-center">
                                                        <div class="avatar-sm rounded bg-danger align-self-center">
                                                            <span class="avatar-title">
                                                                <i class="ti-linkedin text-white font-size-18"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body overflow-hidden mt-1">
                                                        <h5 class="font-size-15 mb-1">linkedin Ads</h5>
                                                        <p class="text-muted mb-0">4.3k Sale - 4.3k Like</p>
                                                    </div>
                                                    <p class="ms-2 pt-3">
                                                        <i class="mdi mdi-arrow-bottom-right text-danger me-1"></i>30%
                                                    </p>
                                                </div>
                                            </a>
                                        </li>


                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="me-3 align-self-center">
                                                        <div class="avatar-sm rounded bg-danger align-self-center">
                                                            <span class="avatar-title">
                                                                <i class="ti-youtube text-white font-size-18"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body overflow-hidden mt-1">
                                                        <h5 class="font-size-15 mb-1">Youtube Ads</h5>
                                                        <p class="text-muted mb-0">4.2k Sale - 3.7k Like</p>
                                                    </div>
                                                    <p class="ms-2 pt-3">
                                                        <i class="mdi mdi-arrow-top-right text-success me-1"></i>35%
                                                    </p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="inbox-list-item">
                                            <a href="#" class="pb-0">
                                                <div class="media">
                                                    <div class="me-3 align-self-center">
                                                        <div class="avatar-sm rounded bg-dark align-self-center">
                                                            <span class="avatar-title">
                                                                <i class="ti-github text-white font-size-18"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body overflow-hidden mt-1">
                                                        <h5 class="font-size-15 mb-1">GitHub Ads</h5>
                                                        <p class="text-muted mb-2">4.9k Sale - 4.1k Like</p>
                                                    </div>
                                                    <p class="ms-2 pt-3">
                                                        <i class="mdi mdi-arrow-top-right text-success me-1"></i>40%
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div> --}}
                        <div class="col-xl-12">
                            <div class="card  bg-white shadow p-5">
                                <div class="">
                                    <h4 class="fw-bolder">Instructions to Use Admin Panel</h4>
                                    <div >
                                        <span class="fs-5 fw-bolder" >1 - </span>
                                        <span class="fs-5">First must have to Add <b>Brand</b> .</span>
                                    </div>
                                    <div >
                                        <span class="fs-5 fw-bolder" >2 - </span>
                                        <span class="fs-5">Second to Add <b>Attributes</b> by which these attributes use later in category section.</span>
                                    </div>
                                    <div >
                                        <span class="fs-5 fw-bolder" >3 - </span>
                                        <span class="fs-5">Third Add <b>Category</b> and its related attributes.</span>
                                    </div>
                                    <div >
                                        <span class="fs-5 fw-bolder" >4 - </span>
                                        <span class="fs-5">Fourth Add <b>Products</b>.</span>
                                    </div>
                                    <div >
                                        <span class="fs-5 fw-bolder" >5 - </span>
                                        <span class="fs-5">Fifth manage <b>Inventory</b> of the products. </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            @if (!$orders->isEmpty())
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Orders of the Month</h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Order #</th>
                                                        <th scope="col">Full Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Total Amount</th>
                                                        <th scope="col">Payment Method</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $item)
                                                        <tr>
                                                            <th scope="row"> {{ $item->order_number }}</th>
                                                            <td>{{ $item->user->name }} </td>
                                                            <td>{{ $item->checkout_email }}</td>
                                                            <td>{{ $item->total_amount }}</td>
                                                            <td>{{ $item->payment_method }}</td>
                                                            <td>
                                                                @if ($item->status == 'pending')
                                                                    <span
                                                                        class="badge  bg-danger">{{ $item->status }}</span>
                                                                @elseif ($item->status == 'delivered')
                                                                    <span
                                                                        class="badge bg-primary">{{ $item->status }}</span>
                                                                @elseif ($item->status == 'approved')
                                                                    <span
                                                                        class="badge bg-success">{{ $item->status }}</span>
                                                                @elseif ($item->status == 'dispatched')
                                                                    <span
                                                                        class="badge bg-secondary">{{ $item->status }}</span>
                                                                @elseif ($item->status == 'cancelled')
                                                                    <span
                                                                        class="badge bg-dark">{{ $item->status }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal{{ $item->id }}">
                                                                    Details
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade"
                                                                    id="exampleModal{{ $item->id }}"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalCenterTitle">
                                                                                    {{ $item->order_number }}</h5>
                                                                                <button type="button" class="close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table">
                                                                                    <thead class="table-dark">
                                                                                        <tr>
                                                                                            <th scope="col">#</th>
                                                                                            <th scope="col">Product
                                                                                            </th>
                                                                                            <th scope="col">Quantity
                                                                                            </th>
                                                                                            <th scope="col">
                                                                                                Variation
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach ($item->items as $products)
                                                                                            {{-- @dd($products->order_variation) --}}
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    {{ $loop->iteration }}
                                                                                                </th>
                                                                                                <td>{{ $products->product[0]->name }}
                                                                                                </td>
                                                                                                <td>{{ $products->quantity }}
                                                                                                </td>
                                                                                                <td>
                                                                                                    {{-- @dd($attr) --}}
                                                                                                    {{-- @dd($products->order_variation) --}}

                                                                                                    @foreach ($products->order_variation as $attr)
                                                                                                        <span>{{ $attr->variations[0]->attribute_value }}
                                                                                                            , </span>
                                                                                                    @endforeach
                                                                                                </td>
                                                                                            </tr>
                                                                                        @endforeach

                                                                                    </tbody>
                                                                                </table>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal1{{ $item->id }}">
                                                                    Update Status
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade"
                                                                    id="exampleModal1{{ $item->id }}"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <form
                                                                            action="{{ route('orders.update', $item->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalCenterTitle">
                                                                                        {{ $item->order_number }}</h5>
                                                                                    <button type="button"
                                                                                        class="close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <input type="text" hidden
                                                                                    name="status"
                                                                                    value="{{ $item->status }}">
                                                                                <div class="modal-body">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="status"
                                                                                            value="pending"
                                                                                            @if ($item->status == 'pending') checked @endif
                                                                                            id="flexRadioDefault1">
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault1">
                                                                                            Pending
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="status"
                                                                                            value="approved"
                                                                                            @if ($item->status == 'approved') checked @endif
                                                                                            id="flexRadioDefault2">
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault2">
                                                                                            Approved
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="status"
                                                                                            value="dispatched"
                                                                                            @if ($item->status == 'dispatched') checked @endif
                                                                                            id="flexRadioDefault3">
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault3">
                                                                                            Dispatched
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="status"
                                                                                            value="delivered"
                                                                                            @if ($item->status == 'delivered') checked @endif
                                                                                            id="flexRadioDefault4">
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault4">
                                                                                            Delivered
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="status"
                                                                                            value="cancelled"
                                                                                            @if ($item->status == 'cancelled') checked @endif
                                                                                            id="flexRadioDefault5">
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault5">
                                                                                            Cancelled
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Save
                                                                                        changes</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                    @endforeach
                                                </tbody>

                                            </table>

                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                            </div @else <div class="card  bg-white shadow p-5">
                                <div class="text-center">
                                    <h1>Not Orders Yet!</h1>
                                </div>
                        </div>
                        @endif

                    </div>


                </div>



            </div>


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <x-partials.admin-footer />
    </div>
    <!-- end main content-->





    <!-- ============================================================== -->




</x-layouts.admin>
