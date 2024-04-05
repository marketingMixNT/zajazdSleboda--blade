<x-layouts.master>

    @section('title', 'Pokój Dwuosobowy - Idealne Miejsce dla Par | Zajazd Śleboda')
    @section('description', 'Odkryj luksusowy pokój dwuosobowy w Zajazd Śleboda. Idealny dla par, z nowoczesnymi udogodnieniami i eleganckim wystrojem. Zapraszamy!')

    @include('pages.apartments.apartment-one.sections.header')

    <main class='pt-24'>
        <!--CONTAINER -->
        <div class='grid grid-cols-2 max-w-screen-xl mx-auto gap-24'>

            <!--LEFT -->
            <div class="flex flex-col gap-20">

                <div><span class="text-5xl font-handwriting">Odpocznij w rytmie górskiej natury</span></div>

                <img src="{{ asset('assets/images/apartment_three/pokój_dwuosobowy-1.jpg') }}"
                    alt="wnętrze pokoju dwuosobowego w Zębie" width="600" height="700"
                    loading="lazy" class="h-[700px] object-cover" />


                <div><span>Nasz elegancki pokój dwuosobowy został zaprojektowany z myślą o zapewnieniu naszym gościom niezrównanego komfortu i prywatności. Każdy pokój dysponuje nowocześnie wyposażoną, prywatną łazienką z prysznicem, gdzie znajdziesz wszystko, co potrzebne do odświeżenia i relaksu po dniu pełnym wrażeń.</span></div>
            </div>
            <!--RIGHT -->
            <div class="flex flex-col gap-20">

                <div><span>Przestrzeń pokoju zapewnia wygodne udogodnienia, które uczynią Twój pobyt jeszcze bardziej przyjemnym. Do Twojej dyspozycji jest czajnik elektryczny, idealny na poranną kawę czy wieczorną herbatę, a także podłogi z parkietu i ogrzewanie, dzięki czemu atmosfera w pokoju jest zawsze przytulna. Dla rozrywki, pokój wyposażony jest w telewizor z płaskim ekranem i dostępem do usług streamingowych. Centralnym punktem pokoju jest wygodne łóżko, które zapewnia idealne warunki do odpoczynku i regeneracji sił.</span></div>

                <img src="{{ asset('assets/images/apartment_three/pokój_dwuosobowy-2.jpg') }}"alt="wnętrze pokoju dwuosobowego w Zajazd Śleboda w Zębie"
                    width="465" height="405" loading="lazy" class='pr-32 h-[400px]' />

                <!--AMENITIES -->
                @include('pages.apartments.apartment-one.sections.amenities')

            </div>

        </div>
        <!--SWIPER -->
        <section class="lg:mt-60 pt-24">

            <div class="2xl:py-72   w-full relative" id="image_slider">
                <image-slider :menu="{{ json_encode($images) }}"></image-slider>
            </div>
        </section>
        <!--INFO -->
        @include('pages.apartments.apartment-one.sections.info')
    </main>

    <!--OTHER ROOMS -->
    @include('pages.apartments.apartment-one.sections.other-rooms')

</x-layouts.master>
