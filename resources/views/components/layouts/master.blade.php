<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zajazd Śleboda') }}</title>

  <meta desc="">

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body id="app" class="overflow-x-hidden">

    <!--NAVIGATION-->
    @include('partials.nav.nav-bar')
    @include('partials.nav.menu')

    <x-preloader/>
    {{ $slot }}

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
   
            <script src="https://wis.upperbooking.com/owcedwie/be-panel?locale=pl" async></script>
</body>

</html>
