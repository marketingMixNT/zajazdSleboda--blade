<x-layouts.master>

    @section('title', 'Zajazd Śleboda w Zębie: Komfortowe Pokoje i Restauracja w Tatrach')
    @section('description',
        'Odkryj Zajazd Śleboda w Zębie - Twoje idealne miejsce na odpoczynek w Tatrach. Oferujemy przytulne pokoje i wyśmienitą kuchnię w sercu gór. Zapraszamy!')

@include('pages.home.sections.header')
@include('pages.home.sections.about')
@include('pages.home.sections.apartments')
@include('pages.home.sections.hero')
@include('pages.home.sections.restaurant')
@include('pages.home.sections.restaurant-menu')

</x-layouts.master>