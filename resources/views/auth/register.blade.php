<x-main-layout>



    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
           <div class="container">
              <div class="row">
                 <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                       <h3 class="breadcrumb__title">Register Now</h3>
                       <div class="breadcrumb__list">
                          <span><a href="register.html#">Home</a></span>
                          <span>Register</span>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- login area start -->
        <section class="tp-login-area pb-140 p-relative z-index-1 fix">
           <div class="tp-login-shape">
              <img class="tp-login-shape-1" src="{{ asset('assets/img/login/login-shape-1.png') }}" alt="">
              <img class="tp-login-shape-2" src="{{ asset('assets/img/login/login-shape-2.png') }}" alt="">
              <img class="tp-login-shape-3" src="{{ asset('assets/img/login/login-shape-3.png') }}" alt="">
              <img class="tp-login-shape-4" src="{{ asset('assets/img/login/login-shape-4.png') }}" alt="">
           </div>
           <div class="container">
              <div class="row justify-content-center">
                 <div class="col-xl-6 col-lg-8">
                    <div class="tp-login-wrapper">
                       <div class="tp-login-top text-center mb-30">
                          <h3 class="tp-login-title">Sign Up GADCHUNK.</h3>
                          <p>Already have an account?  <span><a href="/login">Sign In</a></span></p>
                       </div>
                       <div class="tp-login-option">
                          <div class="tp-login-social mb-10 d-flex flex-wrap align-items-center justify-content-center">
                             <div class="tp-login-option-item">
                                <a href="/register">
                                    <img class="apple" src="{{ asset('assets/img/login/Gadchunk-logo.png') }}" width="100%" alt="">
                                </a>
                             </div>
                          </div>

                          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <x-login-input-label :value="__('Name')" :for="__('Name')"/>
                                <x-login-input-tag id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Enter you Full Name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>


                            <div class="my-3">
                                <x-login-input-label :value="__('Email')" :for="__('email')"/>
                                <x-login-input-tag id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter Email Address" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="my-3">
                                <x-login-input-label :value="__('Phone Number')" :for="__('phone')"/>
                                <x-login-input-tag id="phone" type="tel" name="phone" :value="old('phone')" required autofocus placeholder="Enter Phone Number" />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                            <div class="my-3">
                                <x-login-input-label :value="__('Password')" :for="__('password')"/>
                                <x-login-input-tag id="password" type="password" name="password" :value="old('password')" required autofocus placeholder="Enter Password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="my-3">
                                <x-login-input-label :value="__('Confirm Password')" :for="__('Password')"/>
                                <x-login-input-tag id="password_confirmation" type="password" name="password_confirmation" :value="old('password_confirmation')" required autofocus placeholder="Enter Password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <x-primary-button class="ml-4">
                                  {{ __('Register') }}
                            </x-primary-button>
                            <div class="mt-4 text-center">
                                <p>Already have an account ? <a href="{{ route('login') }}" class="fw-bold text-dark"> Login </a> </p>
                            </div>
                        </form>


                          {{-- <div class="tp-login-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                             <div class="tp-login-remeber">
                                <input id="remeber" type="checkbox">
                                <label for="remeber">I accept the terms of the Service & <a href="register.html#">Privacy Policy</a>.</label>
                             </div>
                          </div>
                          <div class="tp-login-bottom">
                             <a href="register.html#" class="tp-login-btn w-100">Sign Up</a>
                          </div> --}}
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- login area end -->

     </main>



</x-main-layout>
