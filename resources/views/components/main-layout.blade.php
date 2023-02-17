
<html class="no-js" lang="en">

    <head>

        <x-layouts.links />
        {{-- @include('sweetalert::alert')  --}}
    </head>

    <body>
    {{-- <div class="main-wrapper main-wrapper-3"> --}}
        <x-layouts.header />
        {{ $slot }}



        <x-layouts.footer />
    {{-- </div> --}}
    </body>

</html>
