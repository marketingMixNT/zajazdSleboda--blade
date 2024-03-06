<x-layouts.master>

    @section('title', 'Wyjątkowe Noclegi w Sercu Tatr | Zajazd Śleboda')
    @section('description', 'Odkryj komfortowe pokoje w Zajeździe Śleboda, gdzie spokój Tatr łączy się z domową
        atmosferą. Idealne miejsce na wypoczynek i bazę do górskich przygód.')



        <x-base.header title="Pokoje" bgi='apartments-hero'>

            <x-base.secondary-button extraClasses="lg:hidden mt-12" href="#">Rezerwuj</x-base.secondary-button>
            <!--RESERVATION PANEL-->
            <div class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"></div>


        </x-base.header>

        @include('pages.apartments.sections.all-apartments')


    </x-layouts.master>
