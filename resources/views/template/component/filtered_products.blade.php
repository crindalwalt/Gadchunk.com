@foreach ($inventory_products as $item)
    @if ($item->prod_inventory)
        <a href="{{ route('product_detail', $item->id) }}" style="text-decoration: none">

            <li>
                <ul class="product_label ul_li_block clearfix">
                    @if ($item->discount_price)
                        <li data-bg-color="#cc1414">{{ $item->discount_price }}</li>
                    @endif
                </ul>
                {{-- {{  '/product/'.$item->products->slug.'/'.$item->product_id }} --}}
                <div class="electronic_product_item">

                    <ul class="product_label ul_li clearfix">
                        @if ($item->prod_inventory->discount_price)
                            <li data-bg-color="#cc1414">
                                {{ $item->prod_inventory->discount_price }}
                            </li>
                        @endif
                    </ul>
                    <div class="item_image">
                        {{-- @dd($item) --}}

                        <img src="{{ asset('storage/inventory_images/' . $item->images[0]->product_image) }}"
                            alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <span class="item_name">{{ $item->category->name }}</span>
                        <h3 class="item_title">
                            <a href="#!">{{ $item->name }}</a>
                        </h3>
                        <div class="d-flex ">
                            @if ($item->prod_inventory->discount_price)
                                @php
                                    $trim_value = trim($item->prod_inventory->discount_price, '%');
                                    $discount_value = ($trim_value / 100) * $item->prod_inventory->retail_price;
                                    $value = $item->prod_inventory->retail_price - $discount_value;
                                @endphp
                                <span class="item_price">Rs.{{ $value }}</span>
                            @endif

                            <span class="mx-1"><del>{{ $item->prod_inventory->retail_price }}</del></span>
                            <span class="ml-4">
                                <i class="fal fa-shopping-cart bg_supermarket_red text-white p-2 mr-2 rounded  add-cart"
                                    data-route="{{ route('add-cart', $item->id) }}"></i>
                                <i class="fal fa-heart bg_supermarket_red text-white p-2 rounded add-wishlist"
                                    data-route="{{ route('add.wishlist', $item->id) }}"></i>
                            </span>
                        </div>

                    </div>


                </div>

            </li>
        </a>
    @else
        <div class="item_content">
            <span class="item_type text-uppercase">{{ $item->name }}</span>

            <div>
                <strong>Unavailable due to price not set yet</strong>

            </div>

        </div>
    @endif
@endforeach
