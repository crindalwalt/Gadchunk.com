<x-main-layout>
    <x-layouts.header :wishlists="$wishlists" :categories="$categories" :cartitems="$cart_items" />


    <main>
        <!-- error area start -->
        <section class="tp-error-area pt-110 pb-110">
           <div class="container">
              <div class="row justify-content-center">
                 <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="tp-error-content text-center">
                       <div class="tp-error-thumb">
                          <img src="{{ asset('assets/img/logo/Gadchunk-logo.png') }}" alt="">
                       </div>

                       <h3 class="tp-error-title">Thank You !</h3>
                       <p>Order Succesfully Placed.</p>

                       <a href="{{ route('order_list') }}">
                        <button class="btn btn-outline-success">Check Order Details</button>
                     </a>                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- error area end -->

     </main>



     <x-layouts.footer />

</x-main-layout>

