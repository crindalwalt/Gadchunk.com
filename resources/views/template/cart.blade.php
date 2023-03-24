<x-main-layout>
    {{-- Selective header  --}}
    {{-- @dd($products->all()); --}}

    <x-layouts.header :categories=$categories />


    <!-- main body - start
  ================================================== -->
    <main>


        <!-- breadcrumb_section - start
   ================================================== -->
        <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix"
            data-background="{{ asset('images/cartback') }}">
            <div class="overlay" data-bg-color="#1d1d1d"></div>
            <div class="container">
                <h1 class="page_title text-white">Cart Page</h1>
                <ul class="breadcrumb_nav ul_li_center clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Shop</li>
                    <li>Shopping Cart</li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb_section - end
   ================================================== -->


        <!-- cart_section - start
   ================================================== -->
        <section class="cart_section sec_ptb_140 clearfix">
            <div class="container">

                <div class="cart_table mb_50">
                    <table class="table">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd(Session::all()) --}}
                            @if ($products->count() > 0)
                               @foreach ($products as $item)
                               <tr  id="productremove{{ $item->id }}">
                                <td>
                                    <div class="cart_product">
                                        <div class="item_image">
                                            <img src="" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">{{$item->products->name}}</h4>
                                            <span class="item_type">{{$item->products->category->name}}</span>
                                        </div>
                                        <button type="button" class="remove_btn " id="remove-product"
                                        data-route="{{ route('cart.remove', $item->id) }}"
                                        data-remove="productremove{{ $item->id }}">
                                            <i class="fal fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <span class="price_text">Rs.{{$item->discount_price}}</span>
                                </td>
                                <td>
                                    <div class="quantity_input">
                                            <span class="input_number_decrement">–</span>
                                            <input  class="input_number quantity"
                                            data-route="{{ route('cart.quantity', $item->id) }}"
                                            value="{{ $item->squantity ? $item->squantity : '0' }}"
                                            min="1" step="1"
                                            id="quantity{{ $item->id }}" data-decimals="0" required>                                            
                                            <span class="input_number_increment">+</span>
                                    </div>
                                </td>
                                <td> Rs.<span class="">{{$item->squantity* $item->discount_price}}</span></td>
                            </tr>
                               @endforeach
                            @else
                                <div class="text-center">
                                    <h3 class="text-danger">Cart is empty</h3>
                                </div>
                            @endif

                        </tbody>
                    </table>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="cart_update_btn">
                        <a href="{{route('shop')}}"><button type="button"  class="custom_btn bg_secondary text-uppercase">Back to Shop</button>
                        </a>
                    </div>
                </div>
                {{-- <div class="coupon_wrap mb_50">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="coupon_form">
                                <div class="form_item mb-0">
                                    <input type="text" class="coupon" placeholder="Coupon Code">
                                </div>
                                <button type="submit" class="custom_btn bg_danger text-uppercase">Apply
                                    Coupon</button>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="cart_update_btn">
                                <button type="button" class="custom_btn bg_secondary text-uppercase">Update
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row justify-content-lg-end">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="cart_pricing_table pt-0 text-uppercase" data-bg-color="#f2f3f5">
                            <h3 class="table_title text-center" data-bg-color="#ededed">Cart Total</h3>
                            <ul class="ul_li_block clearfix">
                                <li><span>Subtotal</span> <span class="sub_total">Rs.{{$sub_total}} </span></li>
                                <li><span>Discount</span> <span class="discount">Rs. {{$discount}}</span></li>
                                <li><span>Total</span> <span class="total_price">Rs. {{$total}}</span></li>
                            </ul>
                            <a href="{{ route('checkout') }}" class="custom_btn bg_success"><button class="text-white">Proceed to Checkout</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- cart_section - end
   ================================================== -->


    </main>
    <!-- main body - end
  ================================================== -->

</x-main-layout>
