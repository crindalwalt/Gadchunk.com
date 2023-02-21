<x-main-layout>
    {{-- @dd($products) --}}
    <section class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Products</li>
                        <li class="active">Shopping cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!--Cart TAble-->
    <section id="cart" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="heading uppercase marginbottom15">Shopping cart</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="uppercase">Product photo</th>
                                    <th class="uppercase">Product name</th>
                                    <th class="uppercase">Description</th>
                                    <th class="uppercase">Price</th>
                                    <th class="uppercase">Quantity</th>
                                    <th class="uppercase">Total Price</th>
                                    <th class="uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($products->count() > 0)
                                    @foreach ($products as $product)
                                        <tr id="productremove{{ $product->id }}">
                                            <td>
                                                <img class="shopping-product" src="images/cart-table1.jpg"
                                                    alt="your product">
                                            </td>
                                            <td class="product-name">
                                                <h5>{{ $product->name }} ({{ $product->category->name }})</h5>
                                            </td>
                                            <td>{{ $product->description }}</td>
                                            <td class="price">
                                                <h5>$170.00</h5>
                                            </td>
                                            <td>
                                                <div class="input-group spinner">
                                                    <input type="text" class="form-control" value="02">
                                                    <div class="input-group-btn-vertical">
                                                        <div class="btn"><i class="fa fa-angle-up"></i></div>
                                                        <div class="btn"><i class="fa fa-angle-down"></i></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="price">
                                                <h5>$170.00</h5>
                                            </td>
                                            <td class="text-center"><a class="btn-close " id="remove-product"
                                                    data-route="{{ route('cart.remove', $product->id) }}">
                                                    <i class="fa fa-close"></i></a></td>
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
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="/" class="uppercase btn-light border-radius margintop30">CONTINUE
                                SHOPPING</a>
                        </div>
                        {{-- <div class="col-sm-3 text-right">
                            <a href="/" class="uppercase btn-dark border-radius margintop30">UPDATE SHOPPING
                                CART</a>
                        </div> --}}
                      
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-sm-4">
                    <div class="shop_measures margintop40">
                        <h4 class="heading uppercase bottom30">Calculate shipping</h4>
                        <form class="cart-form">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="country">Select your Counttry</label>
                                    <input type="text" class="form-control" id="country"
                                        placeholder="United States (USA)" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="city">Select your State</label>
                                    <label class="select form-control">
                                        <select name="country" id="city">
                                            <option>USA</option>
                                            <option>Canada</option>
                                            <option>Chilli</option>
                                            <option>France</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="zip">Mail</label>
                                    <input type="text" class="form-control" id="zip" placeholder="Zip Code"
                                        required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="submit" class="uppercase btn-dark border-radius margintop30"
                                        value="Update Shipping">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="shop_measures margintop40">
                        <h4 class="heading uppercase bottom30">coupon code</h4>
                        <p class="bottom_half">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</p>
                        <form class="cart-form">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="country">Coupon Code</label>
                                    <input type="text" class="form-control" id="country" placeholder="98F101192"
                                        required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="submit" class="uppercase btn-dark border-radius margintop30"
                                        value="REdeem code">
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <div class="col-sm-4">
                    <div class="shop_measures margintop40">
                        <h4 class="heading uppercase bottom30">cart totals</h4>
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td class="text-right">
                                        <h5>$170.00</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <td class="text-right">
                                        <h5>$10.00</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cart Totals</td>
                                    <td class="text-right">
                                        <h5 class="price">$180.00</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="/checkout" class="uppercase btn-light border-radius margintop30">Proceed to
                            checkout</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


</x-main-layout>
