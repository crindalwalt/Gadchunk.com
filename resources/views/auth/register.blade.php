<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>Register page | Zeelma.com </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-partials.login-head-links />


</head>


<body class="authentication-bg bg-primary">
<div class="home-center">
    <div class="home-desc-center">

        <div class="container">

            <div class="home-btn"><a href="/" class="text-white router-link-active"><i
                        class="fas fa-home h2"></i></a></div>


            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="px-2 py-3">


                                <div class="text-center">
                                    <a href="/">
                                        <img src="{{ asset('assets/images/logo/Gadchunk.png') }}" height="52" alt="logo">
                                    </a>

                                    <h5 class="text-primary mb-2 mt-4">Welcome to E-Commerce Site !</h5>
                                    <p class="text-muted">Get your free account now.</p>
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

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>
    <!-- End Log In page -->
</div>


</body>

</html>
