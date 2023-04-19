<x-main-layout>
    {{-- Selective header  --}}
    {{-- @dd($products->all()); --}}

    <x-layouts.header :wishlists=$wishlists />


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
            <div class="container-fluid">

                <div class="cart_table mb_50">
                    <table class="table">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Discount %</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Variation</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($products) --}}
                            @if ($products->count() > 0)
                                @foreach ($products as $item)
                                    {{-- @dd($item->inven_prod_images) --}}
                                    <tr id="productremove{{ $item->id }}">
                                        <td>
                                            <div class="cart_product">
                                                <div class="item_image">
                                                    <img src="{{ asset('storage/inventory_images/' . $item->images[0]->product_image) }}"
                                                        alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h4 class="item_title">{{ $item->name }}</h4>
                                                    <span class="item_type">{{ $item->category->name }}</span>
                                                </div>
                                                <button type="button" class="remove_btn " id="remove-product"
                                                    data-route="{{ route('cart.remove', $item->id) }}"
                                                    data-remove="productremove{{ $item->id }}">
                                                    <i class="fal fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="price_text">Rs.{{ $item->prod_inventory->retail_price }}</span>
                                        </td>
                                        @if ($item->prod_inventory->discount_price)
                                            <td>
                                                <span
                                                    class="price_text">{{ $item->prod_inventory->discount_price }}</span>
                                            </td>
                                        @else
                                            <td>
                                                <span class="price_text">0%</span>
                                            </td>
                                        @endif
                                        <td>
                                            <div class="quantity_input">
                                                <span class="input_number_decrement">–</span>
                                                <input class="input_number quantity"
                                                    data-route="{{ route('cart.quantity', $item->id) }}"
                                                    value="{{ $item->squantity ? $item->squantity : '0' }}"
                                                    min="1" step="1" id="quantity{{ $item->id }}"
                                                    data-decimals="0" required>
                                                <span class="input_number_increment">+</span>
                                            </div>
                                        </td>

                                        <td> Rs. <span
                                                class="single_total{{ $item->id }}">{{ $item->prod_inventory->retail_price }}</span>
                                        </td>

                                        <td class="d-flex">
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-sm btn-outline-success"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal1{{ $item->id }}">
                                                Apply
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade"
                                                id="exampleModal1{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="{{ route('cart.variation', $item->id) }}" method="post">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="exampleModalCenterTitle">
                                                                    {{ $item->name }}
                                                                    <span>Variation Available</span>
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span
                                                                        aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @foreach ($item->category->attributes as $attributes)

                                                                    <div class=" mb-3 d-flex flex-column">
                                                                        <label
                                                                        class ="control-label" name = "attribute">{{ $attributes->attribute_name }}</label>
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
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Apply Variation
                                                                    </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h4>Variation Available: </h4></td>
                                        <td class="d-flex">
                                            @foreach ($cart_attributes as $values)

                                            @if ($values['product_id'] == $item->id)
                                            <span class="badge bg-primary mx-3 text-white">{{ $values->attribute_values[0]->attribute_value }}</span>

                                            @endif
                                            @endforeach
                                        </td>
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
                        <a href="{{ route('shop') }}"><button type="button"
                                class="custom_btn bg_secondary text-uppercase">Back to Shop</button>
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
                                <li><span>Subtotal</span> <span class="sub_total">Rs.{{ $sub_total }} </span></li>
                                <li><span>Discount</span> <span class="discount"> {{ $discount }}</span></li>
                                <li><span>Total</span> <span class="total_price">Rs. {{ $total }}</span></li>
                            </ul>
                            <a href="{{ route('checkout') }}" class="custom_btn bg_success"><button
                                    class="text-white">Proceed to Checkout</button></a>
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
