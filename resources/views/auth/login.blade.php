
    <!doctype html>
<html lang="en">
<x-partials.login-head-links />


<body class="authentication-bg bg-primary">
<div class="home-center">
    <div class="home-desc-center">

        <div class="container">

            <div class="home-btn"><a href="/public" class="text-white router-link-active"><i
                        class="fas fa-home h2"></i></a></div>


            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="px-2 py-3">


                                <div class="text-center">
                                    <a href="/">
                                        <img src="{{ asset('assets/images/zeelma-logo.png') }}" height="52" alt="logo">
                                    </a>

                                    <h5 class="text-primary mb-2 mt-4">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to Zeelma.</p>
                                </div>

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
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"
                                                   id="remember_me" name="remember">
                                            <label class="form-label"
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
                                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> {{ __('Forgot your password?') }}</a>
                                        @endif
                                    </div>


                                </form>


                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center text-white">
                        <p>Don't have an account ?<a href="/register" class="fw-bold text-white"> Register</a> </p>

                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- End Log In page -->
</div>



</body>

</html>
