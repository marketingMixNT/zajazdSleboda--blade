<x-layouts.master>
    @section('title',
        'Odkryj Kulinarne Tajemnice Tatr w Naszej Restauracji | Zajazd Śleboda
        ')
    @section('description',
        'Odkryj kulinarny świat Restauracji Zajazdu Śleboda, gdzie tradycyjne smaki Podhala łączą
        się z nowoczesną kuchnią. Zapraszamy na wyjątkowe doświadczenie kulinarne w sercu Tatr.')

        <x-base.header title="Restauracja" bgi='restaurant-hero'>

            {{-- add call for food button --}}

        </x-base.header>


        <!--CONTAINER-->
        {{-- FIRST SECTION --}}
        @include('pages.restaurant.sections.first-section')

        {{-- SWIPER --}}
        <section class="lg:mt-60">
            <div id="restaurant_dish_slider" class="2xl:py-72 w-full relative">
                <restaurant-dish-slider :menu="{{ json_encode($menu) }}"></restaurant-dish-slider>
            </div>
        </section>

        {{-- SECOND SECTION --}}
        @include('pages.restaurant.sections.second-section')

    </x-layouts.master>
