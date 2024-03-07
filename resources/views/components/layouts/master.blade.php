<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Title-->
    <title>@yield('title', 'Zajaz Śleboda')</title>
    <meta name="description" content='@yield('description')'>

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/assets/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/assets/favicon/safari-pinned-tab.svg') }}" color="#242424">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#242424">

   

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
   
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body  class="overflow-x-hidden">
   
    <!--NAVIGATION-->
    @include('shared.nav.nav-bar')
    @include('shared.nav.menu')
    <!--PRELOADER-->
    <x-preloader />


    {{ $slot }}

    <!--FOOTER-->
    
    @include('shared.footer')
    @include('shared.mobile-buttons')

    <!--SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="https://wis.upperbooking.com/owcedwie/be-panel?locale=pl" async></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <script type="text/javascript">
        const lightbox = GLightbox({  loop:true });
      </script>
</body>

</html>
