<x-main-layout>
    <x-layouts.header :categories=$categories />

   <main class="main">
    {{-- @dd($wishlists->all()) --}}
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
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Action</th>
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
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="product-title">{{$wishlist->product->product_id}}</td>
                                    <td class="price-col">{{ $wishlist->product->retail_price }}</td>
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
