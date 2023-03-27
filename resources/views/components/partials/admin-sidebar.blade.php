<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="{{ asset('admin-assets/images/Shahzad.jpg') }}" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">Shahzad Farooq</h5>
                    <span class="font-size-13 text-white-50">Administrator</span>
                </div>
            </div>
        </div>



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/admin" class="waves-effect">
                        <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- Collection pane --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-wallet"></i>
                        <span>Collections</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/collection">All Collections</a></li>
                        {{-- <li><a href="{{ route('collections.add') }}">Add Collection</a></li> --}}

                    </ul>
                </li>
                {{-- Category pane --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-basket"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/category">Manage Category</a></li>
                        {{-- <li><a href="{{ route('collections.add') }}">Add Collection</a></li> --}}

                    </ul>
                </li>
                {{-- product pane --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-cart"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/prod_type">Products Type</a></li>
                        <li><a href="/admin/prod_var">Products Variation</a></li>
                        <li><a href="/admin/product/add">Manage Products</a></li>

                    </ul>
                </li>
                {{-- Product-Inventory pane --}}
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Product Inventory</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/product_inventory">Manage Inventory</a></li>
                        <li><a href="{{ route('collections.add') }}">Add Collection</a></li>

                    </ul>
                </li> --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-link"></i>
                        <span>Manage Attributes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('product.variation') }}">Manage Variations</a></li>

                    </ul>
                </li>






                {{-- Brand pane --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-tag"></i>
                        <span>Brand</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/brand">Manage brands</a></li>
                        {{-- <li><a href="{{ route('collections.add') }}">Add Collection</a></li> --}}

                    </ul>
                </li>
                {{-- Weight pane --}}
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-stack"></i>
                        <span>Weight</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/weight">Manage Weight</a></li>
                        <li><a href="{{ route('collections.add') }}">Add Collection</a></li>

                    </ul>
                </li> --}}


                <li class="menu-title">Customers</li>

                {{-- Customers pane --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-user"></i>
                        <span>Customers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/users">All Customers</a></li>
                        {{-- <li><a href="{{ route('collections.add') }}">Add Collection</a></li> --}}
                    </ul>
                </li>
                {{-- Order pane --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect has-arrow">
                        <i class="dripicons-to-do"></i>
                        {{-- <span class="badge rounded-pill bg-danger float-end"></span> --}}
                        <span>Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route("orders.index") }}">All Orders</a></li>
                        <li><a href="/admin/orders/new">New Orders</a></li>
                        <li><a href="/admin/orders/completed">Completed Orders</a></li>

                    </ul>
                </li>









            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
