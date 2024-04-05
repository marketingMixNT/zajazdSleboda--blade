<x-layouts.master>

    @section('title', 'Pokój z 2 Łóżkami King-Size w Zajazd Śleboda: Komfort i Relaks')
    @section('description', 'Odkryj luksusowy pokój z 2 łóżkami king-size w Zajazd Śleboda. Idealne miejsce dla par i rodzin szukających wygody. Rezerwuj teraz i ciesz się niezapomnianym pobytem!')

    @include('pages.apartments.apartment-one.sections.header')

    <main class='pt-24'>
        <!--CONTAINER -->
        <div class='grid grid-cols-2 max-w-screen-xl mx-auto gap-24'>

            <!--LEFT -->
            <div class="flex flex-col gap-20">

                <div><span class="text-5xl font-handwriting">Twoja oaza spokoju w górach</span></div>

                <img src="{{ asset('assets/images/apartment_one/pokój_z_2_łóżkami_typu_king-size-5.jpg') }}"
                    alt="wnętrze pokoju z 2 łóżkami typu king-size w Zajazd Śleboda w Zębie" width="600" height="700"
                    loading="lazy" class="h-[700px] object-cover" />


                <div><span>Nasz przestronny pokój dla czterech osób to kwintesencja komfortu i elegancji, zaprojektowany
                        z myślą o zapewnieniu maksymalnej wygody i relaksu. Goście mogą cieszyć się wyjątkowym
                        wypoczynkiem, dzięki dwóm luksusowym łóżkom king-size, które obiecują spokojny sen. Pokój
                        otwiera się na prywatny balkon, oferując malownicze widoki, idealne do porannych kaw lub
                        wieczornego odpoczynku.</span></div>
            </div>
            <!--RIGHT -->
            <div class="flex flex-col gap-20">

                <div><span>Do pełnego relaksu przyczynia się także nowoczesna łazienka, wyposażona w wysokiej jakości
                        udogodnienia, które dopełniają całości wrażenia luksusu. Dla miłośników rozrywki, pokój oferuje
                        telewizor z płaskim ekranem i dostępem do szerokiej gamy platform streamingowych, pozwalając na
                        relaks po dniu pełnym wrażeń.</span></div>

                <img src="{{ asset('assets/images/apartment_one/pokój_z_2_łóżkami_typu_king-size-8.jpg') }}"alt="wnętrze pokoju z 2 łóżkami typu king-size w Zajazd Śleboda w Zębie"
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
