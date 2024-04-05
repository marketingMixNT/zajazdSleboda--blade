<x-layouts.master>

    @section('title', 'Pokój z 2 Łóżkami King-Size w Zajazd Śleboda: Komfort i Relaks')
    @section('description',
        'Odkryj luksusowy pokój z 2 łóżkami king-size w Zajazd Śleboda. Idealne miejsce dla par i
        rodzin szukających wygody. Rezerwuj teraz i ciesz się niezapomnianym pobytem!')

        @include('pages.apartments.apartment-one.sections.header')

        <main class='pt-24'>
            <!--CONTAINER -->
            <div class='grid grid-cols-2 max-w-screen-xl mx-auto gap-24'>

                <!--LEFT -->
                <div class="flex flex-col gap-20">

                    <div><span class="text-5xl font-handwriting">Znajdź spokój wśród szczytów</span></div>

                    <img src="{{ asset('assets/images/apartment_two/pokój_czteroosobowy_z_balkonem-5.jpg') }}"
                        alt="wnętrze pokoju czteroosobowego z balkonem w Zajazd Śleboda w Zębie" width="600" height="700"
                        loading="lazy" class="h-[700px] object-cover" />


                    <div><span>Nasz przestronny pokój czteroosobowy został zaprojektowany z myślą o zapewnieniu maksymalnego
                            komfortu i relaksu dla naszych gości. Wyposażenie obejmuje nowoczesny telewizor z płaskim
                            ekranem, który oferuje szeroki dostęp do usług streamingowych – idealne rozwiązanie dla tych,
                            którzy pragną spędzić wieczór na oglądaniu ulubionych filmów czy seriali. Dodatkowo, pokój
                            dysponuje prywatną łazienką, wyposażoną w niezbędne udogodnienia, które zapewnią wygodę i
                            prywatność podczas pobytu.</span></div>
                </div>
                <!--RIGHT -->
                <div class="flex flex-col gap-20">

                    <div><span>Przytulność i funkcjonalność to cechy, które najlepiej opisują ten pokój. Do dyspozycji gości
                            są dwa wygodne łóżka, gwarantujące spokojny sen i regenerację sił po dniu pełnym wrażeń. Każdy z
                            pokoi posiada również balkon, z którego można podziwiać piękno otaczającej natury, delektując
                            się poranną kawą czy wieczornym odpoczynkiem. Nasz pokój czteroosobowy to idealne miejsce dla
                            rodzin oraz grup przyjaciół, którzy szukają wysokiej jakości wypoczynku w sercu malowniczej
                            okolicy.</span></div>

                    <img src="{{ asset('assets/images/apartment_two/pokój_czteroosobowy_z_balkonem-7.jpg') }}"alt="wnętrze pokoju czteroosobowego z balkonem w Zajazd Śleboda w Zębie"
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
