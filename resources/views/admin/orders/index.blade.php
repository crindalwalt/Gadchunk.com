 <x-layouts.admin>


     @include('sweetalert::alert')
     <!-- ============================================================== -->
     <div class="main-content">

         <div class="page-content">

             <!-- start page title -->
             <div class="page-title-box">
                 <div class="container-fluid">
                     <div class="row align-items-center">
                         <div class="col-sm-6">
                             <div class="page-title">
                                 <h4>Orders</h4>
                                 <ol class="breadcrumb m-0">
                                     <li class="breadcrumb-item"><a href="javascript: void(0);">GADCHUNK</a></li>
                                     <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                     <li class="breadcrumb-item active">Orders</li>
                                 </ol>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="float-end d-none d-sm-block">
                                 <a href="" class="btn btn-success">Add Widget</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- end page title -->


             <div class="container-fluid">

                 <div class="page-content-wrapper">



                     @if (!$orders->isEmpty())

                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="card">
                                     <div class="card-body  pt-0">
                                         <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                             <li class="nav-item">
                                                 <a class="nav-link fw-bold p-3 active" href="#">All Orders
                                                     ({{ count($orders) }})</a>
                                             </li>
                                             <li class="nav-item">
                                                 <a class="nav-link p-3 fw-bold" href="javascript:void(0)">Pending ({{ count($orders_pending) }})</a>
                                             </li>
                                             <li class="nav-item">
                                                 <a class="nav-link p-3 fw-bold" href="javascript:void(0)">Delivered ({{ count($orders_deliver) }})</a>
                                             </li>
                                         </ul>
                                         <div class="table-responsive">
                                             <table class="table mb-0" id="myTable">
                                                 style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                 <thead class="thead-light">
                                                     <tr>
                                                         <th>Order #</th>
                                                         <th>Date</th>
                                                         <th>Billing Name</th>
                                                         <th>Total Amount</th>
                                                         <th>Payment</th>
                                                         <th>Status</th>
                                                         <th style="width: 120px;">Action</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                     @foreach ($orders as $order)
                                                         <tr>
                                                             <th scope="row"> {{ $order->order_number }}</th>
                                                             <td>{{ $order->created_at }}</td>
                                                             <td>{{ $order->user->name }} </td>
                                                             <td>{{ $order->total_amount }}</td>
                                                             <td>{{ $order->payment_method }}</td>
                                                             <td>
                                                                 @if ($order->status == 'pending')
                                                                     <span
                                                                         class="badge  bg-danger">{{ $order->status }}</span>
                                                                 @elseif ($order->status == 'delivered')
                                                                     <span
                                                                         class="badge bg-primary">{{ $order->status }}</span>
                                                                 @elseif ($order->status == 'approved')
                                                                     <span
                                                                         class="badge bg-success">{{ $order->status }}</span>
                                                                 @elseif ($order->status == 'dispatched')
                                                                     <span
                                                                         class="badge bg-secondary">{{ $order->status }}</span>
                                                                 @elseif ($order->status == 'cancelled')
                                                                     <span
                                                                         class="badge bg-dark">{{ $order->status }}</span>
                                                                 @endif
                                                             </td>

                                                             <td  class="d-flex justify-content-around">

                                                                 <!-- Button trigger modal -->
                                                                 <button type="button" class="btn btn-primary"
                                                                     data-bs-toggle="modal"
                                                                     data-bs-target="#exampleModal{{ $order->id }}">
                                                                     <i class="mdi mdi-eye font-size-18"></i>
                                                                 </button>

                                                                 <!-- Modal -->
                                                                 <div class="modal fade"
                                                                     id="exampleModal{{ $order->id }}"
                                                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                     aria-hidden="true">
                                                                     <div class="modal-dialog">

                                                                         <div class="modal-content">
                                                                             <div class="modal-header">
                                                                                 <h5 class="modal-title"
                                                                                     id="exampleModalCenterTitle">
                                                                                     {{ $order->order_number }}</h5>
                                                                                 <button type="button" class="close"
                                                                                     data-bs-dismiss="modal"
                                                                                     aria-label="Close">
                                                                                     <span
                                                                                         aria-hidden="true">&times;</span>
                                                                                 </button>
                                                                             </div>

                                                                             <div class="modal-body">
                                                                                 <table class="table">
                                                                                     <thead class="table-dark">
                                                                                         <tr>
                                                                                             <th scope="col">#</th>
                                                                                             <th scope="col">Product
                                                                                             </th>
                                                                                             <th scope="col">
                                                                                                 Quantity
                                                                                             </th>
                                                                                             <th scope="col">
                                                                                                 Variation
                                                                                             </th>
                                                                                         </tr>
                                                                                     </thead>
                                                                                     <tbody>
                                                                                         @foreach ($order->items as $products)
                                                                                             <tr>
                                                                                                 <th scope="row">
                                                                                                     {{ $loop->iteration }}
                                                                                                 </th>
                                                                                                 <td>{{ $products->product[0]->name }}
                                                                                                 </td>
                                                                                                 <td>{{ $products->quantity }}
                                                                                                 </td>
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
                                                                                 <button type="button"
                                                                                     class="btn btn-secondary"
                                                                                     data-bs-dismiss="modal">Close</button>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <!-- Button trigger modal -->
                                                                 <button type="button" class="btn btn-primary"
                                                                     data-bs-toggle="modal"
                                                                     data-bs-target="#exampleModal2{{ $order->id }}">
                                                                     <i class="mdi mdi-pencil font-size-18"></i>
                                                                 </button>

                                                                 <!-- Modal -->
                                                                 <div class="modal fade"
                                                                     id="exampleModal2{{ $order->id }}"
                                                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                     aria-hidden="true">
                                                                     <div class="modal-dialog">
                                                                         <form
                                                                             action="{{ route('orders.update', $order->id) }}"
                                                                             method="post">
                                                                             @csrf
                                                                             <div class="modal-content">
                                                                                 <div class="modal-header">
                                                                                     <h5 class="modal-title"
                                                                                         id="exampleModalCenterTitle">
                                                                                         {{ $order->order_number }}
                                                                                     </h5>
                                                                                     <button type="button"
                                                                                         class="close"
                                                                                         data-bs-dismiss="modal"
                                                                                         aria-label="Close">
                                                                                         <span
                                                                                             aria-hidden="true">&times;</span>
                                                                                     </button>
                                                                                 </div>
                                                                                 <input type="text" hidden
                                                                                     name="status"
                                                                                     value="{{ $order->status }}">
                                                                                 <div class="modal-body">
                                                                                     <div class="form-check">
                                                                                         <input
                                                                                             class="form-check-input"
                                                                                             type="radio"
                                                                                             name="status"
                                                                                             value="pending"
                                                                                             @if ($order->status == 'pending') checked @endif
                                                                                             id="flexRadioDefault1">
                                                                                         <label
                                                                                             class="form-check-label"
                                                                                             for="flexRadioDefault1">
                                                                                             Pending
                                                                                         </label>
                                                                                     </div>

                                                                                     <div class="form-check">
                                                                                         <input
                                                                                             class="form-check-input"
                                                                                             type="radio"
                                                                                             name="status"
                                                                                             value="approved"
                                                                                             @if ($order->status == 'approved') checked @endif
                                                                                             id="flexRadioDefault2">
                                                                                         <label
                                                                                             class="form-check-label"
                                                                                             for="flexRadioDefault2">
                                                                                             Approved
                                                                                         </label>
                                                                                     </div>

                                                                                     <div class="form-check">
                                                                                         <input
                                                                                             class="form-check-input"
                                                                                             type="radio"
                                                                                             name="status"
                                                                                             value="dispatched"
                                                                                             @if ($order->status == 'dispatched') checked @endif
                                                                                             id="flexRadioDefault3">
                                                                                         <label
                                                                                             class="form-check-label"
                                                                                             for="flexRadioDefault3">
                                                                                             Dispatched
                                                                                         </label>
                                                                                     </div>

                                                                                     <div class="form-check">
                                                                                         <input
                                                                                             class="form-check-input"
                                                                                             type="radio"
                                                                                             name="status"
                                                                                             value="delivered"
                                                                                             @if ($order->status == 'delivered') checked @endif
                                                                                             id="flexRadioDefault4">
                                                                                         <label
                                                                                             class="form-check-label"
                                                                                             for="flexRadioDefault4">
                                                                                             Delivered
                                                                                         </label>
                                                                                     </div>
                                                                                     <div class="form-check">
                                                                                         <input
                                                                                             class="form-check-input"
                                                                                             type="radio"
                                                                                             name="status"
                                                                                             value="cancelled"
                                                                                             @if ($order->status == 'cancelled') checked @endif
                                                                                             id="flexRadioDefault5">
                                                                                         <label
                                                                                             class="form-check-label"
                                                                                             for="flexRadioDefault5">
                                                                                             Cancelled
                                                                                         </label>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div class="modal-footer">
                                                                                     <button type="button"
                                                                                         class="btn btn-secondary"
                                                                                         data-bs-dismiss="modal">Close</button>
                                                                                     <button type="submit"
                                                                                         class="btn btn-primary">Save
                                                                                         changes</button>
                                                                                 </div>
                                                                             </div>
                                                                         </form>
                                                                     </div>
                                                                 </div>

                                                             </td>
                                                     @endforeach
                                                     {{-- <tr>
                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1572</a> </td>
                                                    <td>
                                                        04 Apr, 2020
                                                    </td>
                                                    <td>Walter Brown</td>

                                                    <td>
                                                        $172
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-light btn-rounded">Invoice <i class="mdi mdi-download ms-2"></i></button>
                                                    </td>
                                                    <td id="tooltip-container1">
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </td>
                                                </tr> --}}
                                                 </tbody>
                                             </table>
                                         </div>


                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- end row -->
                     @else
                         <div class="card  bg-white shadow p-5">
                             <div class="text-center">
                                 <h1>Not Order Yet!</h1>
                             </div>
                         </div>
                     @endif
                 </div>


             </div> <!-- container-fluid -->
         </div>
         <!-- End Page-content -->


         <x-partials.admin-footer />


 </x-layouts.admin>
