<x-main-layout>
   <main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Wishlist<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <table class="table table-wishlist table-mobile">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock Status</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    {{-- @if (!Auth::user()->wishlist->count()== 0) --}}
                        <div id="wishlist">
                            @foreach ($wishlists as $wishlist)
                                <tr id="remove{{$wishlist->id}}">
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src=""
                                                        alt="Product image">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#">{{ $wishlist->product->name }}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">{{ $wishlist->product->standard }}</td>
                                    <td class="stock-col"><span class="in-stock">In stock</span></td>
                                    <td class="action-col">
                                        <div class="dropdown">
                                            <button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-list-alt"></i>Select Options
                                            </button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">First option</a>
                                                <a class="dropdown-item" href="#">Another option</a>
                                                <a class="dropdown-item" href="#">The best option</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="remove-col">
                                        
                                      <button type="button" class="btn btn-danger btn-remove wishremove" data-route="{{route('wishlist.remove' , $wishlist->id)}}" 
 
                                      data-item="remove{{$wishlist->id}}" >Remove</button>
                                    </td>
                                </tr>
                            @endforeach
                        </div>
                    {{-- @else
                        <div class="text-center">
                            <h3 class="text-danger">Wishlist is empty</h3>
                        </div>
                    @endif --}}


                </tbody>
            </table><!-- End .table table-wishlist -->
         
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->


</x-main-layout>
