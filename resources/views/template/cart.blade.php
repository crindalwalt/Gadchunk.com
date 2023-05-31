<x-main-layout>
    <x-layouts.header :wishlists="$wishlists" :categories="$categories" :cartitems="$products" />


    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-95 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title">Shopping Cart</h3>
                            <div class="breadcrumb__list">
                                <span><a href="cart.html#">Home</a></span>
                                <span>Shopping Cart</span>
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
                @if (!$products->isEmpty())
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="tp-cart-list mb-25 mr-30">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th colspan="2" class="tp-cart-header-product">Product</th>
                                            <th class="tp-cart-header-price">Price</th>
                                            <th class="tp-cart-header-quantity">Quantity</th>
                                            <th></th> --}}
                                            <th colspan="2" class="tp-cart-header-product">Product Name</th>
                                            <th class="tp-cart-header-price">Price</th>
                                            <th class="tp-cart-header-price">Discount %</th>
                                            <th class="tp-cart-header-quantity">Quantity</th>
                                            <th>Total Price</th>
                                            <th>Variation</th>
                                            <th>

                                            </th>
                                        </tr>
                                        <tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $item)
                                            <tr id="productremove{{ $item->id }}">
                                                <!-- img -->
                                                <td class="tp-cart-img"><a href="{{ route('product_detail',$item->id) }}"> <img
                                                            src="{{ asset('storage/inventory_images/' . $item->images[0]->product_image) }}"
                                                            alt=""></a></td>
                                                <!-- title -->
                                                <td class="tp-cart-title"><a
                                                        href="{{ route('product_detail',$item->id) }}">{{ $item->name }}</a></td>
                                                <!-- price -->
                                                <td class="tp-cart-price"><span>Rs.
                                                        {{ $item->prod_inventory->retail_price }}</span></td>
                                                <td class="tp-cart-price"><span>
                                                        {{ $item->prod_inventory->discount_price }}</span></td>
                                                <!-- quantity -->
                                                <td class="tp-cart-quantity">
                                                    <div class="tp-product-quantity mt-10 mb-10">
                                                        <span class="tp-cart-minus">
                                                            <svg width="10" height="2" viewBox="0 0 10 2"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1H9" stroke="currentColor"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                        <input class="tp-cart-input quantity"
                                                            data-route="{{ route('cart.quantity', $item->id) }}"
                                                            value="{{ $item->squantity ? $item->squantity : '1' }}"
                                                            min="1" step="1"
                                                            id="quantity{{ $item->id }}" data-decimals="0" required
                                                            type="text">
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
                                                </td>
                                                {{-- total price --}}
                                                <td class="tp-cart-price single_total{{ $item->id }}"><span>
                                                        {{ $item->prod_inventory->retail_price }}</span></td>

                                                <td class="tp-cart-action">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-outline-success"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal1{{ $item->id }}">
                                                        Product Type
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal1{{ $item->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{ route('cart.variation', $item->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalCenterTitle">
                                                                            {{ $item->name }}
                                                                            <span>Variation Available</span>
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @if (!empty($item->category->attributes))
                                                                        @foreach ($item->category->attributes as $attributes)
                                                                        <div class=" mb-3 d-flex flex-column">
                                                                            <label class="control-label"
                                                                                name="attribute">{{ $attributes->attribute_name }}</label>
                                                                            <select name="attribute_value[]"
                                                                                id="attributes_{{ $attributes->id }}"
                                                                                class="form-select form-select-sm select2"
                                                                                aria-label=".form-select-sm example"
                                                                                multiple>
                                                                                <option
                                                                                    value="{{ null }}">
                                                                                    Select an
                                                                                    option
                                                                                </option>
                                                                                @foreach ($attributes->prod_attribute_value as $value)
                                                                                    <option
                                                                                        value="{{ $value->id }}"
                                                                                        id="options_{{ $value->id }}"
                                                                                        class="d-flex justify-content-between ">
                                                                                        {{ $value->attribute_value }}
                                                                                        <small
                                                                                            class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>


                                                                        </div>
                                                                    @endforeach
                                                                        @else
                                                                        <div class="card  bg-white shadow p-5">
                                                                            <div class="text-center">
                                                                                <h1>Product Attributes Unavailable!</h1>
                                                                            </div>
                                                                        </div>
                                                                        @endif

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Apply
                                                                            Type
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- action -->
                                                <td class="tp-cart-action">
                                                    <button class="tp-cart-action-btn" id="remove-product"
                                                    data-route="{{ route('cart.remove', $item->id) }}"
                                                    data-remove="productremove{{ $item->id }}">
                                                        <svg width="10" height="10" viewBox="0 0 10 10"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                        {{-- <span>Remove</span> --}}
                                                    </button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Type: </h4>
                                                </td>
                                                <td >
                                                    @foreach ($cart_attributes as $values)
                                                        @if ($values['product_id'] == $item->id)
                                                            <span
                                                                class="badge bg-primary mx-3 text-white">{{ $values->attribute_values[0]->attribute_value }}</span>
                                                        @endif
                                                    @endforeach
                                                </td>
                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="tp-cart-bottom">
                                <div class="row align-items-end">
                                    <div class="col-xl-6 col-md-8">
                                        <div class="tp-cart-coupon">
                                            <form action="cart.html#">
                                                <div class="tp-cart-coupon-input-box">
                                                    <label>Coupon Code:</label>
                                                    <div class="tp-cart-coupon-input d-flex align-items-center">
                                                        <input type="text" placeholder="Enter Coupon Code">
                                                        <button type="submit">Apply</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-4">
                                        <div class="tp-cart-update text-md-end">
                                            <button type="button" class="tp-cart-update-btn">Update Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="tp-cart-checkout-wrapper">
                                <div class="tp-cart-checkout-top d-flex align-items-center justify-content-between">
                                    <span class="tp-cart-checkout-top-title">Subtotal</span>
                                    <span class="tp-cart-checkout-top-price sub_total">Rs.{{ $sub_total }}</span>
                                </div>
                                <div class="tp-cart-checkout-shipping">
                                    <h4 class="tp-cart-checkout-shipping-title">Discount Price</h4>
                                    <div class="tp-cart-checkout-shipping-option-wrapper">
                                            <label for="flat_rate">Flat discount: <span class="discount">{{ $discount }}</span></label>
                                    </div>
                                </div>
                                <div class="tp-cart-checkout-total d-flex align-items-center justify-content-between">
                                    <span>Total</span>
                                    <span class="total_price">Rs. {{ $total }}</span>
                                </div>
                                <div class="tp-cart-checkout-proceed">
                                    <a href="{{ route('checkout') }}" class="tp-cart-checkout-btn w-100">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- if no item in cart -->
                    <div class="cartmini__empty text-center ">
                        <img src="assets/img/product/cartmini/empty-cart.png" alt="">
                        <p>Your Cart is empty</p>
                        <a href="{{ route('shop') }}" class="tp-btn">Go to Shop</a>
                    </div>
                @endif

            </div>
        </section>
        <!-- cart area end -->

    </main>


    <x-layouts.footer />
</x-main-layout>
