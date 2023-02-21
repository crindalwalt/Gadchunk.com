<div>

      <!--Loader-->
      <div class="loader">
        <div class="spinner-load">
          <div class="dot1">
          </div>
          <div class="dot2">
          </div>
        </div>
      </div>
      <!--TOPBAR-->
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="header-top-entry">
                <div class="title">
                  ENGLISH
                  <i class="fa fa-angle-down">
                  </i>
                </div>
                <div class="list">
                  <a class="list-entry" href="#.">English
                  </a>
                  <a class="list-entry" href="#.">Spanish
                  </a>
                </div>
              </div>
              <div class="header-top-entry">
                <div class="title">
                  USD
                  <i class="fa fa-angle-down">
                  </i>
                </div>
                <div class="list">
                  <a class="list-entry" href="#.">$ CAD
                  </a>
                  <a class="list-entry" href="#.">€ EUR
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-8">
              <ul class="top_link">
                <li>
                  <a href="#." class="uppercase">My Account
                  </a>
                </li>
                <li>
                  <a href="/wishlist" class="uppercase">wishlist
                  </a>
                </li>
                <li>
                  <a href="#." class="uppercase">checkout
                  </a>
                </li>
                <li>
                  <a href="#." class="uppercase">login
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--HEADER-->
      <header>
        <nav class="navbar navbar-default navbar-sticky bootsnav">
          <div class="container">
            <div class="attr-nav">
              <ul>
                <li class="cart-toggler">
                  <a href="{{route('cart')}}">
                    <i class="fa fa-shopping-cart">
                    </i>
                    <span class="badge " id="cart-count">0
                    </span>
                  </a>
                </li>
                <li class="cart-toggler">
                  <a href="/wishlist">
                    <i class="fa fa-heart-o">
                    </i>
                    <span class="badge" id="wishlist-count">0
                    </span>
                  </a>
                </li>
                <li class="search">
                  <a href="#.">
                    <i class="fa fa-search">
                    </i>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Start Header Navigation -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars">
                </i>
              </button>
              <a class="navbar-brand" href="index.html">
                <img src="{{asset('assets/images/logo.png')}}" class="logo" alt="">
              </a>
            </div>
            <!-- End Header Navigation -->
            <div class="collapse navbar-collapse" id="navbar-menu">
              <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                <li class="dropdown active">
                  <a href="/" class="dropdown-toggle" data-toggle="dropdown">Home
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="index.html">Home V1
                      </a>
                    </li>
                    <li>
                      <a href="index2.html">Home V2
                      </a>
                    </li>
                    <li>
                      <a href="index3.html">Home V3
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Products
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="grid.html">Grid Default
                      </a>
                    </li>
                    <li>
                      <a href="grid_list.html">Grid Lists
                      </a>
                    </li>
                    <li>
                      <a href="grid_sidebar.html">Grid Sidebar
                      </a>
                    </li>
                    <li>
                      <a href="list_sidebar.html">Lists Sidebar
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#.">collection
                  </a>
                </li>
                <li class="dropdown megamenu-fw">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">pages
                  </a>
                  <ul class="dropdown-menu megamenu-content" role="menu">
                    <li>
                      <div class="row">
                        <div class="col-menu col-md-3">
                          <h5 class="title heading_border">Blog
                          </h5>
                          <div class="content">
                            <ul class="menu-col">
                              <li>
                                <a href="blog1.html">Blog Two Cols
                                </a>
                              </li>
                              <li>
                                <a href="blog2.html">Blog Three Cols
                                </a>
                              </li>
                              <li>
                                <a href="blog_post.html">Blog Posts
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-menu col-md-3">
                          <h5 class="title heading_border">Products Elements
                          </h5>
                          <div class="content">
                            <ul class="menu-col">
                              <li>
                                <a href="/checkout">Product Chekouts
                                </a>
                              </li>
                             
                              <li>
                                <a href="/cart">Shopping Cart
                                </a>
                              </li> 
                            </ul>
                          </div>
                        </div>
                        <div class="col-menu col-md-3">
                          <h5 class="title heading_border">Theme Elements
                          </h5>
                          <div class="content">
                            <ul class="menu-col">
                              <li>
                                <a href="#.">Skills
                                </a>
                              </li>
                              <li>
                                <a href="#.">Team & Testimonials
                                </a>
                              </li>
                              <li>
                                <a href="404.html">Errors
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>    
                        <div class="col-menu col-md-3">
                          <div class="content">
                            <img src="images/mega-menu.png"  alt="menu" class="img-responsive">
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#.">about us
                  </a>
                </li>
                <li>
                  <a href="contact.html">contact us
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class=" search-toggle">
              <div class="top-search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-addon">
                    <i class="fa fa-search">
                    </i>
                  </span>
                </div>
              </div>
            </div>
            <ul class="cart-list">
              <li>
                <a href="#." class="photo">
                  <img src="images/hover-cart.jpg" class="cart-thumb" alt="" />
                </a>
                <h6>
                  <a href="#.">Sacrificial Chair Design 
                  </a>
                </h6>
                <p>Qty: 2 
                  <span class="price">$170.00
                  </span>
                </p>
              </li>
              <li class="total clearfix">
                <div class="pull-right">
                  <strong>Shipping
                  </strong>: $5.00
                </div>
                <div class="pull-left">
                  <strong>Total
                  </strong>: $173.00
                </div>
              </li>
              <li class="cart-btn">
                <a href="#." class="active">VIEW CART 
                </a>
                <a href="#.">CHECKOUT 
                </a>
              </li>
            </ul>
          </div>   
        </nav>
      </header>
</div>
