<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Title-->
    <title>@yield('title', 'Zajaz Śleboda')</title>
    <meta name="description" content='@yield('description')'>

      <!--Cannonical-->
      <link rel="canonical" href="{{ url()->current() }}" />
      <!--Favicons-->
      @include('partials.favicon')
      <!--Facebook Meta-->
      @include('partials.facebook-meta')
      <!--Fonts-->
      @include('partials.fonts')

   

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
   
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @cookieconsentscripts
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

    
        @cookieconsentview
</body>

</html>
