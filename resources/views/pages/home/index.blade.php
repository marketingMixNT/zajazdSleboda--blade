<x-layouts.master>

    @section('title', 'Zajazd Śleboda')
    @section('description',
        'desc')

@include('pages.home.sections.header')
@include('pages.home.sections.about')
@include('pages.home.sections.apartments')
@include('pages.home.sections.hero')
@include('pages.home.sections.restaurant')
@include('pages.home.sections.restaurant-menu')

</x-layouts.master>