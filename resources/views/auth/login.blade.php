<x-main-layout>


    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
           <div class="container">
              <div class="row">
                 <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                       <h3 class="breadcrumb__title">My account</h3>
                       <div class="breadcrumb__list">
                          <span><a href="login.html#">Home</a></span>
                          <span>My account</span>
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
                          <h3 class="tp-login-title">Login to GadChunk.</h3>
                          <p>Don’t have an account? <span><a href="/register">Create a free account</a></span></p>
                       </div>
                       <div class="tp-login-option">
                          <div class="tp-login-social mb-10 d-flex flex-wrap align-items-center justify-content-center">

                             <div class="tp-login-option-item">
                                <a href="/login">
                                   <img class="apple" src="{{ asset('assets/img/login/Gadchunk-logo.png') }}" width="100%" alt="">
                                </a>
                             </div>
                          </div>
                          {{-- <div class="tp-login-mail text-center mb-40">
                             <p>or Sign in with <a href="login.html#">Email</a></p>
                          </div> --}}
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form class="form-horizontal mt-4 pt-2" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="my-3">
                                    <x-login-input-label :value="__('Email')" :for="__('email')"/>
                                    <x-login-input-tag id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter Email Address" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="my-3">
                                    <x-login-input-label :value="__('Password')" :for="__('password')"/>
                                    <x-login-input-tag id="password" type="password" name="password" :value="old('password')" required autofocus placeholder="Enter Password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="mb-3">
                                    <div class="form-check ">
                                        <input type="checkbox" class="form-check-input tp-login-forgot"
                                               id="remember_me" name="remember">
                                        <label class="form-label "
                                               for="remember_me">{{ __('Remember me') }}</label>
                                    </div>

                                </div>

                                <div>

                                    <x-primary-button class="ml-3">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                </div>

                                <div class="mt-4 text-center">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-muted tp-login-forgot"><i class="mdi mdi-lock me-1"></i> {{ __('Forgot your password?') }}</a>
                                    @endif
                                </div>


                            </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- login area end -->

     </main>


</x-main-layout>
