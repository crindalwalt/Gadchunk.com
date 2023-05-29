<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="{{ Auth::user()->profile_image ? asset('storage/avatar_images/' . Auth::user()->profile_image ) : asset('assets/img/users/user-10.jpg' )}}" alt="Avatar" class="rounded-circle">
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
                    <a href="/admin" class="waves-effect" >
                        {{-- <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end">3</span> --}}
                        <h5 >Dashboard</h5>
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
                        <li><a href="{{ route('category.index') }}">Add Category</a></li>
                        <li><a href="{{ route('sub_category.index') }}">Add Sub-Category</a></li>

                    </ul>
                </li>
                {{-- product pane --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-cart"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- <li><a href="/admin/prod_type">Products Type</a></li>
                        <li><a href="/admin/prod_var">Products Variation</a></li> --}}
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
                        <li><a href="{{ route('inventory.index') }}">Manage Inventory</a></li>
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



                <li class="menu-title">Analytics</li>

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
                {{-- Customers pane --}}
                <li>
                    <a href="{{route('contact.message.show')}}" class="waves-effect">
                        <i class="dripicons-user"></i>
                        <span>All Messages</span>
                    </a>
                </li>

                {{-- Order pane --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-stack"></i>
                        <span>Order Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('orders.index') }}">Manage Orders</a></li>
                    </ul>
                </li>

                {{--                <li> --}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect"> --}}
                {{--                        <i class="dripicons-suitcase"></i> --}}
                {{--                        <span>UI Elements</span> --}}
                {{--                    </a> --}}
                {{--                    <ul class="sub-menu" aria-expanded="false"> --}}
                {{--                        <li><a href="ui-alerts.html">Alerts</a></li> --}}
                {{--                        <li><a href="ui-buttons.html">Buttons</a></li> --}}
                {{--                        <li><a href="ui-cards.html">Cards</a></li> --}}
                {{--                        <li><a href="ui-carousel.html">Carousel</a></li> --}}
                {{--                        <li><a href="ui-dropdowns.html">Dropdowns</a></li> --}}
                {{--                        <li><a href="ui-grid.html">Grid</a></li> --}}
                {{--                        <li><a href="ui-images.html">Images</a></li> --}}
                {{--                        <li><a href="ui-lightbox.html">Lightbox</a></li> --}}
                {{--                        <li><a href="ui-modals.html">Modals</a></li> --}}
                {{--                        <li><a href="ui-rangeslider.html">Range Slider</a></li> --}}
                {{--                        <li><a href="ui-session-timeout.html">Session Timeout</a></li> --}}
                {{--                        <li><a href="ui-progressbars.html">Progress Bars</a></li> --}}
                {{--                        <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li> --}}
                {{--                        <li><a href="ui-tabs-accordions.html">Accordions</a></li> --}}
                {{--                        <li><a href="ui-typography.html">Typography</a></li> --}}
                {{--                        <li><a href="ui-video.html">Video</a></li> --}}
                {{--                        <li><a href="ui-general.html">General</a></li> --}}
                {{--                        <li><a href="ui-colors.html">Colors</a></li> --}}
                {{--                        <li><a href="ui-rating.html">Rating</a></li> --}}
                {{--                    </ul> --}}
                {{--                </li> --}}





                {{--                <li> --}}
                {{--                    <a href="javascript: void(0);" class="waves-effect"> --}}
                {{--                        <i class="dripicons-to-do"></i> --}}
                {{--                        <span class="badge rounded-pill bg-danger float-end">6</span> --}}
                {{--                        <span>Forms</span> --}}
                {{--                    </a> --}}
                {{--                    <ul class="sub-menu" aria-expanded="false"> --}}
                {{--                        <li><a href="form-elements.html">Form Elements</a></li> --}}
                {{--                        <li><a href="form-validation.html">Form Validation</a></li> --}}
                {{--                        <li><a href="form-advanced.html">Form Advanced</a></li> --}}
                {{--                        <li><a href="form-editors.html">Form Editors</a></li> --}}
                {{--                        <li><a href="form-uploads.html">Form Upload</a></li> --}}
                {{--                        <li><a href="form-xeditable.html">Form Xeditable</a></li> --}}
                {{--                        <li><a href="form-wizard.html">Form Wizard</a></li> --}}
                {{--                        <li><a href="form-mask.html">Form Mask</a></li> --}}
                {{--                    </ul> --}}
                {{--                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-graph-pie"></i>
                        <span>Analytics</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.html">Apex charts</a></li>
                        <li><a href="charts-chartist.html">Chartist</a></li>
                        <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                        <li><a href="charts-flot.html">Flot Chart</a></li>
                        <li><a href="charts-knob.html">Knob Chart</a></li>
                        <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                    </ul>
                </li> --}}


                <li class="menu-title">Settings</li>
                {{-- Profile pane --}}
                <li>
                    <a href="{{ route('admin.profile') }}" class=" waves-effect">
                        <i class="dripicons-article"></i>
                        <span>Profile Page</span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/promotion">All Promotions</a></li>
                        <li><a href="{{ route('collections.add') }}">Add Collection</a></li>

                    </ul> --}}
                </li>



                {{-- logout Pane --}}
                <li>

                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                         <a class="dropdown-item text-danger d-flex" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                <i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i>
                                    Logout
                        </a>
                    </form>


                </li>


                {{--                <li> --}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect"> --}}
                {{--                        <i class="dripicons-toggles"></i> --}}
                {{--                        <span>Tables</span> --}}
                {{--                    </a> --}}
                {{--                    <ul class="sub-menu" aria-expanded="false"> --}}
                {{--                        <li><a href="tables-basic.html">Basic Tables</a></li> --}}
                {{--                        <li><a href="tables-datatable.html">Data Tables</a></li> --}}
                {{--                        <li><a href="tables-responsive.html">Responsive Table</a></li> --}}
                {{--                        <li><a href="tables-editable.html">Editable Table</a></li> --}}
                {{--                    </ul> --}}
                {{--                </li> --}}

                {{--                <li> --}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect"> --}}
                {{--                        <i class="dripicons-basket"></i> --}}
                {{--                        <span>Icons</span> --}}
                {{--                    </a> --}}
                {{--                    <ul class="sub-menu" aria-expanded="false"> --}}
                {{--                        <li><a href="icons-materialdesign.html">Material Design</a></li> --}}
                {{--                        <li><a href="icons-dripicons.html">Dripicons</a></li> --}}
                {{--                        <li><a href="icons-fontawesome.html">Font awesome</a></li> --}}
                {{--                        <li><a href="icons-themify.html">Themify Icons</a></li> --}}
                {{--                    </ul> --}}
                {{--                </li> --}}

                {{--                <li> --}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect"> --}}
                {{--                        <i class="dripicons-map"></i> --}}
                {{--                        <span>Maps</span> --}}
                {{--                    </a> --}}
                {{--                    <ul class="sub-menu" aria-expanded="false"> --}}
                {{--                        <li><a href="maps-google.html">Google Maps</a></li> --}}
                {{--                        <li><a href="maps-vector.html">Vector Maps</a></li> --}}
                {{--                    </ul> --}}
                {{--                </li> --}}

                {{--                <li class="menu-title">Ut</li> --}}


                {{--                <li> --}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect"> --}}
                {{--                        <i class="dripicons-device-desktop"></i> --}}
                {{--                        <span>Layouts</span> --}}
                {{--                    </a> --}}
                {{--                    <ul class="sub-menu" aria-expanded="true"> --}}
                {{--                        <li> --}}
                {{--                            <a href="javascript: void(0);" class="has-arrow">Vertical</a> --}}
                {{--                            <ul class="sub-menu" aria-expanded="true"> --}}
                {{--                                <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li> --}}
                {{--                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li> --}}
                {{--                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li> --}}
                {{--                                <li><a href="layouts-boxed.html">Boxed Layout</a></li> --}}
                {{--                                <li><a href="layouts-preloader.html">Preloader</a></li> --}}
                {{--                            </ul> --}}
                {{--                        </li> --}}

                {{--                        <li> --}}
                {{--                            <a href="javascript: void(0);" class="has-arrow">Horizontal</a> --}}
                {{--                            <ul class="sub-menu" aria-expanded="true"> --}}
                {{--                                <li><a href="layouts-horizontal.html">Horizontal</a></li> --}}
                {{--                                <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li> --}}
                {{--                                <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li> --}}
                {{--                                <li><a href="layouts-hori-preloader.html">Preloader</a></li> --}}
                {{--                                <li><a href="layouts-hori-colored-header.html">Colored Header</a></li> --}}
                {{--                            </ul> --}}
                {{--                        </li> --}}
                {{--                    </ul> --}}
                {{--                </li> --}}



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
