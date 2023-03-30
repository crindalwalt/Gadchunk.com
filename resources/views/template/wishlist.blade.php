<x-main-layout>
    {{-- @dd($wishlists->all()) --}}
    <x-layouts.header :wishlists=$wishlists  />
   <main class="main">
    {{-- @dd($wishlists->all()) --}}
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container py-4">
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
        <div class="container shadow rounded ">
            <table class="table table-wishlist table-mobile">
                @if (!Auth::user()->wishlist->count()== 0)
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                        <div id="wishlist">
                            @foreach ($wishlists as $wishlist)
                            {{-- @dd($wishlist->product->products->featured_image); --}}
                                <tr id="remove{{$wishlist->id}}">
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('storage/product_images/'.$wishlist->product->products->featured_image)}}"
                                                     height="80px" width="80px"   alt="Product image">
                                                </a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="product-title">{{ $wishlist->product->products->name}}</td>
                                    <td class="price-col">{{ $wishlist->product->retail_price }}</td>
                                    <td class="remove-col">

                                      <button type="button" class="btn btn-danger btn-remove wishremove" data-route="{{route('wishlist.remove' , $wishlist->id)}}"

                                      data-item="remove{{$wishlist->id}}" >Remove</button>
                                    </td>
                                </tr>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center">
                            <h3 class="text-danger">Wishlist is empty</h3>
                        </div>
                    @endif


                </tbody>
            </table><!-- End .table table-wishlist -->

        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->


</x-main-layout>
