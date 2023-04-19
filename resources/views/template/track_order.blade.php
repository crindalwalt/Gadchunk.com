<x-main-layout>
    {{-- Selective header  --}}

    <x-layouts.header :wishlists=$wishlists />



    <!-- main body - start
  ================================================== -->
    <main>

        <!-- main_contact_section - start
   ================================================== -->
        <section class="main_contact_section  sec_ptb_100 clearfix">
            <h2 class="text-center"><u>All Orders</u></h2>
            <div class="container shadow rounded bg-white mt-5 mb-5 pb-3">
                @if ($orders)
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Order #</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            {{-- @dd($orders) --}}
                            <tr>
                                <th scope="row"> {{ $item->order_number }}</th>
                                <td>{{ $item->user->name }} </td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->total_amount }}</td>
                                <td>{{ $item->payment_method }}</td>
                                <td>

                                    @if ($item->status == 'pending')
                                        Pending
                                    @elseif($item->status == 'approved')
                                        Approved
                                    @elseif($item->status == 'delivered')
                                        Delivered
                                    @elseif($item->status == 'dispatched')
                                        Dispatched
                                    @elseif($item->status == 'cancelled')
                                        Cancelled
                                    @endif

                                </td>
                                <td>

                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                     data-bs-target="#exampleModal{{ $item->id }}">
                                     Details
                                 </button>

                                 <!-- Modal -->
                                 <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                     <div class="modal-dialog">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h5 class="modal-title" id="exampleModalCenterTitle">
                                                     {{ $item->order_number }}</h5>
                                                 <button type="button" class="close" data-bs-dismiss="modal"
                                                     aria-label="Close">
                                                     <span aria-hidden="true">&times;</span>
                                                 </button>
                                             </div>
                                             <div class="modal-body">
                                                <table class="table">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Variation</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($item->items as $products)
                                                        {{-- @dd($products) --}}
                                                       <tr>
                                                           <th scope="row">{{ $loop->iteration }}</th>
                                                           <td>{{ $products->product[0]->name}}</td>
                                                           <td>{{ $products->quantity }}</td>
                                                           <td>
                                                            @foreach ($products->order_variation as $attr)
                                                            <span>{{ $attr->variation_id }}</span>
                                                            @endforeach
                                                           </td>
                                                       </tr>

                                                       @endforeach

                                                    </tbody>
                                                </table>
                                                 {{-- <div class="table-responsive">
                                                     <table class="table">

                                                         <thead>
                                                             <tr>
                                                                 <th scope="col">#</th>
                                                                 <th scope="col">Product
                                                                     Name</th>
                                                                 <th scope="col">Color
                                                                 </th>
                                                                 <th scope="col">Qty
                                                                 </th>
                                                                 <th scope="col">Price
                                                                 </th>
                                                                 <th scope="col">Image
                                                                 </th>
                                                             </tr>
                                                         </thead>
                                                         <tbody>
                                                                 <tr>
                                                                     <th scope="row">1
                                                                     </th>
                                                                     <td>{{ $item->items[0]->product->name }}
                                                                     </td>
                                                                     <td>{{ $item->items[0]->color }}
                                                                     </td>
                                                                     <td>{{ $item->items[0]->quantity }}
                                                                     </td>
                                                                     <td>{{  $item->items[0]->total_amount }}
                                                                     </td>
                                                                     <td><img src="{{ asset('storage/product_images/'.$item->items[0]->product->featured_image) }}"
                                                                             alt="" height="100px"
                                                                             width="100px">
                                                                     </td>
                                                                 </tr>
                                                         </tbody>
                                                     </table>
                                                 </div> --}}
                                             </div>
                                             <div class="modal-footer">
                                                 <button type="button" class="btn btn-secondary"
                                                     data-bs-dismiss="modal">Close</button>
                                                 {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 @if ($item->status == 'pending')
                                 <form class="d-inline" action="{{ route('order.destroy',$item->id ) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Cancel Order</button>
                                </form>
                                 @endif
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                    {{-- @php
                        $product_id = $orders->items[0]->product_id;
                    @endphp --}}
                    {{-- @foreach ($orders->items as $detail)
                        <div class="shadow p-3 m-5 bg-white rounded">
                            <h3 class="text-center mb-3">Product Detail</h3>
                            <h5>Product Name </h5>
                            <span>{{ $detail->product->name }}</span>
                            <h5>Product Image</h5>
                            <img src="{{ asset('storage/product_images/' . $detail->product->featured_image) }}"
                                width="100px" alt="">
                        </div>
                    @endforeach --}}

                    {{-- <div class="shadow p-3 m-5 bg-white rounded">
                        <h3 class="text-center mb-3">Add Review</h3>
                        <form action="{{ route('review.add') }}" method="post">
                            @csrf
                            <input type="text" name="product_id" value="{{ $product_id }}" hidden>
                            <input type="text" name="user_id" value="{{ $orders->user->id }}" hidden>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="text" name="name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="email" name="email" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>

                            <div class="form_item">
                                <textarea name="description" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form_item">

                                <div class="container-wrapper">
                                    <h3>Rate this Item</h3>
                                    <div class="container d-flex align-items-center justify-content-start mt-3">
                                        <div class="row justify-content-center">

                                            <!-- star rating -->
                                            <div class="rating-wrapper">

                                                <!-- star 5 -->
                                                <input type="radio" id="5-star-rating" name="star_rating"
                                                    value="5" hidden>
                                                <label for="5-star-rating" class="star-rating">
                                                    <i class="fas fa-star d-inline-block "></i>
                                                </label>

                                                <!-- star 4 -->
                                                <input type="radio" id="4-star-rating" name="star_rating"
                                                    value="4" hidden>
                                                <label for="4-star-rating" class="star-rating ">
                                                    <i class="fas fa-star d-inline-block"></i>
                                                </label>

                                                <!-- star 3 -->
                                                <input type="radio" id="3-star-rating" name="star_rating"
                                                    value="3" hidden>
                                                <label for="3-star-rating" class="star-rating ">
                                                    <i class="fas fa-star d-inline-block"></i>
                                                </label>

                                                <!-- star 2 -->
                                                <input type="radio" id="2-star-rating" name="star_rating"
                                                    value="2" hidden>
                                                <label for="2-star-rating" class="star-rating ">
                                                    <i class="fas fa-star d-inline-block"></i>
                                                </label>

                                                <!-- star 1 -->
                                                <input type="radio" id="1-star-rating" name="star_rating"
                                                    value="1" hidden>
                                                <label for="1-star-rating" class="star-rating ">
                                                    <i class="fas fa-star d-inline-block"></i>
                                                </label>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="custom_btn bg_default_red text-uppercase">Submit
                                Review</button>
                        </form>

                    </div> --}}
                @else
                    <div class="card  bg-white shadow p-5">
                        <div class="mb-4 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75"
                                height="75" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1>Not Order Yet!</h1>
                            {{-- <a href="{{ route('order_list') }}">
                        <button class="btn btn-outline-success">Check Order Details</button>
                     </a> --}}
                        </div>
                    </div>
                @endif

            </div>
            </div>
            </div>
        </section>
        <!-- main_contact_section - end
   ================================================== -->


    </main>
    <!-- main body - end
  ================================================== -->





</x-main-layout>
