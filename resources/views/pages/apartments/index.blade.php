<x-layouts.master>

    @section('title', 'Wyjątkowe Noclegi w Sercu Tatr | Zajazd Śleboda')
    @section('description',
        'Odkryj komfortowe pokoje w Zajeździe Śleboda, gdzie spokój Tatr łączy się z domową atmosferą. Idealne miejsce na wypoczynek i bazę do górskich przygód.')



<x-base.header title="Pokoje" bgi='apartments-hero'/>

@include('pages.apartments.sections.all-apartments')


</x-layouts.master>