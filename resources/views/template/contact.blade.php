<x-main-layout>
    <x-layouts.header :wishlists="$wishlists" :categories="$categories" :cartitems="$cart_items" />


    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
           <div class="container">
              <div class="row">
                 <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                       <h3 class="breadcrumb__title">Keep In Touch with Us</h3>
                       <div class="breadcrumb__list">
                          <span><a href="contact.html#">Home</a></span>
                          <span>Contact</span>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- breadcrumb area end -->


        <!-- contact area start -->
        <section class="tp-contact-area pb-100">
           <div class="container">
              <div class="tp-contact-inner">
                 <div class="row">
                    <div class="col-xl-9 col-lg-8">
                       <div class="tp-contact-wrapper">
                          <h3 class="tp-contact-title">Sent A Message</h3>

                          <div class="tp-contact-form">
                             <form action="{{ route('contact.message') }}" method="POST">
                                @csrf
                                @if(Auth::check())
                                <div class="tp-contact-input-wrapper">
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="name" id="name" type="text" value="{{ Auth::user()->name }}">
                                          <input type="text" hidden name="user_id" value="{{ Auth::user()->id }}" >

                                       </div>
                                       @error('name')
                                                        <div class="text-danger">* Name is required</div>
                                                    @enderror
                                       <div class="tp-contact-input-title">
                                          <label for="name">Your Name</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="email" id="email" type="email" value="{{ Auth::user()->email }}">
                                       </div>
                                       @error('email')
                                       <div class="text-danger">* Email is required</div>
                                       @enderror
                                       <div class="tp-contact-input-title">
                                          <label for="email">Your Email</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="subject" id="subject" type="text" placeholder="Write your subject">
                                       </div>
                                       @error('subject')
                                       <div class="text-danger">* Subject is required</div>
                                       @enderror
                                       <div class="tp-contact-input-title">
                                          <label for="subject">Subject</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                         <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
                                       </div>
                                       @error('message')
                                       <div class="text-danger">* Message is required</div>
                                       @enderror
                                       <div class="tp-contact-input-title">
                                          <label for="message">Your Message</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-contact-btn">
                                    <button type="submit">Send Message</button>
                                 </div>
                                @else
                                <h2>Please <a href="/login"><span class="text-primary">login</span></a> to contact the admin</h2>
                                @endif

                             </form>
                             {{-- <p class="ajax-response"></p> --}}
                          </div>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                       <div class="tp-contact-info-wrapper">
                          <div class="tp-contact-info-item">
                             <div class="tp-contact-info-icon">
                                <span>
                                   <img src="{{ asset('assets/img/contact/contact-icon-1.png') }}" alt="">
                                </span>
                             </div>
                             <div class="tp-contact-info-content">
                                <p data-info="mail"><a href="mailto:contact@gadchunk.com">contact@gadchunk.com</a></p>
                                <p data-info="phone"><a href="tel:670-413-90-762">+30 0000000000000</a></p>
                             </div>
                          </div>
                          <div class="tp-contact-info-item">
                             <div class="tp-contact-info-icon">
                                <span>
                                   <img src="{{ asset('assets/img/contact/contact-icon-2.png') }}" alt="">
                                </span>
                             </div>
                             <div class="tp-contact-info-content">
                                <p>
                                   <a href="https://www.google.com/maps/place/New+York,+NY,+USA/@40.6976637,-74.1197638,11z/data=!3m1!4b1!4m6!3m5!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728!16zL20vMDJfMjg2" target="_blank">
                                      Punjab,Lahore <br> Pakistan
                                   </a>
                                </p>
                             </div>
                          </div>
                          <div class="tp-contact-info-item">
                             <div class="tp-contact-info-icon">
                                <span>
                                   <img src="{{ asset('assets/img/contact/contact-icon-3.png') }}" alt="">
                                </span>
                             </div>
                             <div class="tp-contact-info-content">
                                <div class="tp-contact-social-wrapper mt-5">
                                   <h4 class="tp-contact-social-title">Find on social media</h4>

                                   <div class="tp-contact-social-icon">
                                      <a href="contact.html#"><i class="fa-brands fa-facebook-f"></i></a>
                                      <a href="contact.html#"><i class="fa-brands fa-twitter"></i></a>
                                      <a href="contact.html#"><i class="fa-brands fa-linkedin-in"></i></a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- contact area end -->

        <!-- map area start -->
        <section class="tp-map-area pb-120">
           <div class="container">
              <div class="row">
                 <div class="col-xl-12">
                    <div class="tp-map-wrapper">
                       <div class="tp-map-hotspot">
                          <span class="tp-hotspot tp-pulse-border">
                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6" cy="6" r="6" fill="#821F40"/>
                             </svg>
                          </span>
                       </div>
                       <div class="tp-map-iframe">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="770" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=Lahore Pakistan&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- map area end -->

     </main>



     <x-layouts.footer />
</x-main-layout>
