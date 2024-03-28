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
    {!! htmlScriptTagJsApi() !!}
    @cookieconsentscripts

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class="overflow-x-hidden">

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
    @cookieconsentview
    <script src="https://wis.upperbooking.com/owcedwie/be-panel?locale=pl" async></script>


</body>

</html>
