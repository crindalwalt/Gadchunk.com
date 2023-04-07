@foreach ($inventory_products as $item)
<a href="{{ route('product_detail', $item->id) }}"
    style="text-decoration: none">

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
                    <span
                        class="item_price">Rs.{{ $item->prod_inventory->retail_price }}</span>
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
@endforeach
