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
                          <img src="assets/img/error/error.png" alt="">
                       </div>

                       <h3 class="tp-error-title">Oops! Page not found</h3>
                       <p>Whoops, this is embarassing. Looks like the page you were looking for wasn't found.</p>

                       <a href="index.html" class="tp-error-btn">Back to Home</a>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- error area end -->

     </main>


     <x-layouts.footer />
</x-main-layout>

