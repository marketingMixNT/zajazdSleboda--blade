<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Title-->
    <title>@yield('title', 'Zajazd Śleboda')</title>
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

<body>
    <p>test</p>

    <h1>{{ __('welcome.welcome') }}</h1>
    <h1>{{ __('welcome.name-this-color') }}</h1>


    @foreach (config('localization.locales') as $locale)
        <a href="{{route('localization',$locale)}}">{{ __($locale) }}</a>
    @endforeach
</body>

</html>
