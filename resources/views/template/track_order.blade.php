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
                @if ( $orders->isEmpty())

                    <div class="card  bg-white shadow p-5">
                        <div class="text-center">
                            <h1>Not Order Yet!</h1>
                        </div>
                    </div>

                @else
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
                                                                {{-- @dd($products->order_variation) --}}
                                                                <tr>
                                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                                    <td>{{ $products->product[0]->name }}</td>
                                                                    <td>{{ $products->quantity }}</td>
                                                                    <td>
                                                                        {{-- @dd($attr) --}}
                                                                        {{-- @dd($products->order_variation) --}}

                                                                        @foreach ($products->order_variation as $attr)
                                                                            <span>{{ $attr->variations[0]->attribute_value }}
                                                                                , </span>
                                                                        @endforeach
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($item->status == 'pending')
                                        <form class="d-inline" action="{{ route('order.destroy', $item->id) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Cancel Order</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
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
