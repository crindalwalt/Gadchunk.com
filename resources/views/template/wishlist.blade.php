<x-main-layout>
    <x-layouts.header :wishlists="$wishlists" :categories="$categories" :cartitems="$cart_items" />

    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-95 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title">Wishlist</h3>
                            <div class="breadcrumb__list">
                                <span><a href="/">Home</a></span>
                                <span>Wishlist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- cart area start -->
        <section class="tp-cart-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-cart-list mb-45 mr-30">
                            <table class="table">
                                @if (!Auth::user()->wishlist->count() == 0)
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="tp-cart-header-product">Product</th>
                                            <th class="tp-cart-header-price">Price</th>
                                            {{-- <th class="tp-cart-header-quantity">Quantity</th> --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div id="wishlist">
                                            @foreach ($wishlists as $wishlist)
                                                <tr id="remove{{ $wishlist->id }}">
                                                    <!-- img -->
                                                    <td class="tp-cart-img">
                                                        <img src="{{ asset('storage/product_images/' . $wishlist->product->featured_image) }}"
                                                            alt="img not found">
                                                    </td>
                                                    <!-- title -->
                                                    <td class="tp-cart-title product-title mx-4">{{ $wishlist->product->name }}</td>
                                                    <td></td>
                                                    <!-- price -->
                                                    <td class="tp-cart-price price-col"><span>{{ $wishlist->product->prod_inventory->retail_price }}</span></td>
                                                    <!-- quantity -->
                                                    {{-- <td class="tp-cart-quantity">
                                                        <div class="tp-product-quantity mt-10 mb-10">
                                                            <span class="tp-cart-minus">
                                                                <svg width="10" height="2" viewBox="0 0 10 2"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M1 1H9" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <input class="tp-cart-input" type="text" value="1">
                                                            <span class="tp-cart-plus">
                                                                <svg width="10" height="10" viewBox="0 0 10 10"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5 1V9" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M1 5H9" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </td> --}}


                                                    <!-- action -->
                                                    <td class="tp-cart-action">
                                                        <a href="{{ route('product_detail', $wishlist->product->id) }}">
                                                            <button
                                                            class="tp-btn tp-btn-2 tp-btn-blue mx-4">Detail</button>
                                                           </a>
                                                            <button type="submit"
                                                                class="tp-btn tp-btn-2 tp-btn-blue add-cart mx-4"
                                                                data-route="{{ route('add-cart', $wishlist->product->id) }}">Add
                                                                To Cart</button>

                                                        <button class="tp-cart-action-btn btn-remove wishremove"
                                                            data-route="{{ route('wishlist.remove', $wishlist->id) }}"
                                                            data-item="remove{{ $wishlist->id }}">
                                                            <svg width="10" height="10" viewBox="0 0 10 10"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                            <span>Remove</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </div>

                                    </tbody>
                                @else
                                    <div class="text-center">
                                        <h3 class="text-danger">Wishlist is empty</h3>
                                    </div>
                                @endif

                            </table>
                        </div>
                        <div class="tp-cart-bottom">
                            <div class="row align-items-end">
                                <div class="col-xl-6 col-md-4">
                                    <div class="tp-cart-update">
                                        <a href="{{ route('cart') }}" class="tp-cart-update-btn">Go To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart area end -->

    </main>


    <x-layouts.footer />
</x-main-layout>
