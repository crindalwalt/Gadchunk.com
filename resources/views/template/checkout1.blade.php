<x-main-layout>
    <section class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Products</li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container ">
        <div class="row">
            <div class="col-lg-8 mb-3">
                <h2 class="checkout-title ">Billing Details</h2><!-- End .checkout-title -->
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="first">First Name *</label>
                        <input type="text" class="form-control" name="checkout_first" value="{{Auth::user()->name}}" id="first"
                            required>
                    </div><!-- End .col-sm-6 -->

                    <div class="col-sm-6">
                        <label for="last">Last Name *</label>
                        <input type="text" class="form-control" name="checkout_last" value="" id="last"
                            required>
                    </div><!-- End .col-sm-6 -->
                </div><!-- End .row -->

                <label for="company">Company Name (Optional)</label>
                <input type="text" class="form-control" name="checkout_company" id="company">

                <label for="street">Street address *</label>
                <input type="text" class="form-control" name="checkout_street" value=""
                    placeholder="House number and Street name" id="street" required>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="city">Town / City *</label>
                        <input type="text" class="form-control" name="checkout_city" id="city" required>
                    </div><!-- End .col-sm-6 -->

                    <div class="col-sm-6">
                        <label for="country">State / County *</label>
                        <input type="text" class="form-control" name="checkout_country" id="country" required>
                    </div><!-- End .col-sm-6 -->
                </div><!-- End .row -->

                <div class="row">
                    <div class="col-sm-6">
                        <label for="post_code">Postcode / ZIP *</label>
                        <input type="text" class="form-control" name="checkout_post_code" id="post_code" required>
                    </div><!-- End .col-sm-6 -->

                    <div class="col-sm-6">
                        <label for="phone">Phone *</label>
                        <input type="tel" class="form-control" name="checkout_phone" value="" id="phone"
                            required>
                    </div><!-- End .col-sm-6 -->
                </div><!-- End .row -->

                <label for="email">Email address *</label>
                <input type="email" class="form-control" name="checkout_email" value="" id="email" required>

                <label for="notes">Order notes (optional)</label>
                <textarea class="form-control" cols="30" rows="4" name="notes" id="notes"
                    placeholder="Notes about your order, e.g. special notes for delivery"></textarea>

            </div><!-- End .col-lg-9 -->
            <aside class="col-lg-4 mt-3">
              <div class="summary">
                  <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                  <table class="table table-summary">
                      <thead>
                          <tr>
                              <th>Product</th>
                              <th>Total</th>
                          </tr>
                      </thead>

                      <tbody>
                         
                          @foreach ($products as $product)
                          <tr>
                              <td><a href="#">{{$product->products->name}}</a></td>
                              <td>${{$total}}</td>
                          </tr>
                          @endforeach
                          <tr class="summary-subtotal">
                              <td>Subtotal:</td>
                              <td>${{$total}}</td>
                          </tr><!-- End .summary-subtotal -->
                          <tr class="summary-total">
                              <td>Total:</td>
                              <td>${{$total}}</td>
                              <input type="hidden" value="" name="amount">
                          </tr><!-- End .summary-total -->
                      </tbody>
                  </table><!-- End .table table-summary -->

                  <div class="accordion-summary" id="accordion-payment">
                      <input type="hidden"  name="payment_method" id="payment_method">
                      <div class="card">
                          <div class="card-header" id="heading-4">
                              <h2 class="card-title">
                                  <a class="collapsed check_payment_method" data-value="paypal"  role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                      Cash on delivery
                                  </a>
                              </h2>
                          </div><!-- End .card-header -->
                          <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
                              <div class="card-body">
                                  Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                              </div><!-- End .card-body -->
                          </div><!-- End .collapse -->
                      </div><!-- End .card -->

                      <div class="card">
                          <div class="card-header" id="heading-5">
                              <h2 class="card-title">
                                  <a  class="collapsed check_payment_method" data-value="stripe" role="button" value="stripe" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                      Credit Card (Stripe)
                                      {{-- <img src="assets/images/payments-summary.png" alt="payments cards"> --}}
                                  </a>
                              </h2>
                          </div><!-- End .card-header -->
                          <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                              <div id="card-element"></div>
                              {{-- <div class="card-body"> 

                              </div><!-- End .card-body --> --}}
                          </div><!-- End .collapse -->
                      </div><!-- End .card -->
                  </div><!-- End .accordion -->
                  <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                      <span class="btn-text">Place Order</span>
                      {{-- <span class="btn-hover-text">Proceed to Checkout</span> --}}
                  </button>
              </div><!-- End .summary -->
          </aside><!-- End .col-lg-3 -->
          </div>
          <br><br>
    </div>


</x-main-layout>
