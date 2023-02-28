
<html class="no-js" lang="en">

    <head>

        <x-layouts.links />
        {{-- @include('sweetalert::alert')  --}}
    </head>

    <body class="home_supermarket">
    {{-- <div class="main-wrapper main-wrapper-3"> --}}
        <x-layouts.header />

        {{ $slot }}



        <x-layouts.footer />
        
	<!-- fraimwork - jquery include -->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- animation - jquery include -->
    <script src="{{asset('assets/js/parallaxie.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>

    <!-- carousel - jquery include -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!-- filtering & masonry layout - jquery include -->
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/gmaps.min.js')}}"></script>
    <script src="{{asset('assets/js/mCustomScrollbar.js')}}"></script>
    <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>

    <!-- custom - jquery include -->
    <script src="{{asset('assets/js/nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('demo_assets/js/custom.js')}}"></script>
    {{-- </div> --}}
    </body>

</html>
