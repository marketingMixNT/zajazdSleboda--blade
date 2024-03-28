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
        <section>
            <div class=" max-w-screen-2xl px-12 mt-24 mx-auto text-center">
                <!--HEADING-->
                <x-base.heading subheading="Zajazd Śleboda" heading="Elegancja Smaków "
                    decor="Poznaj wyrafinowane dania inspirowane tatrzanską naturą" />
                <!--CONTENT-->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24">
                    <!--SWIPER-->
                    <div class="swiper mySwiper lg:h-[60%] w-full  lg:w-[90%]  lg:py-24 ">


                        <div class="swiper-wrapper">

                            @foreach ($images as $img)
                                <div class="swiper-slide"><img src="{{ asset($img) }}"
                                        class="w-full h-[450px] lg:h-full object-cover"></div>
                            @endforeach
                        </div>
                    </div>
                    <!--TEXT-->
                    <div class="flex flex-col justify-start items-start gap-12">

                        <p class="text sm:mr-52 text-animation text-left">
                            W naszej restauracji w <span class="font-bold">Zajeździe Śleboda</span>, każde danie to opowieść
                            napisana smakami Podhala. Tutaj, gdzie tradycja łączy się z nowoczesnością, oferujemy nie tylko
                            posiłki, ale prawdziwe doświadczenia kulinarne. Z pasją przygotowujemy dania, które zadowolą
                            nawet najbardziej wyrafinowane podniebienia, czerpiąc z bogactwa lokalnych produktów i
                            dziedzictwa górskiej kuchni. Zapraszamy na kulinarną podróż, która pobudzi wszystkie zmysły,
                            zostawiając niezapomniane wspomnienia.
                        </p>

                        <!--IMG-->
                        <div class="overflow-hidden mt-6 lg:mt-12 w-full md:w-[100%] lg:w-auto mx-auto ">
                            <img src="/assets/images/header--small.jpeg" class="ken-burns w-full h-full object-cover" />
                        </div>

                        <div class="flex flex-col justify-start items-start gap-12">
                            <h2 class="title--big text-left lg:text-center lg:mr-32 ">
                                Na Miejscu i Na Wynos
                            </h2>
                            <p class="text sm:mr-32 text-animation text-left">
                                Ciesz się wyjątkowymi daniami naszej kuchni zarówno w przytulnej atmosferze restauracji, jak
                                i w komforcie własnego domu. Zajazd Śleboda oferuje możliwość zamówienia ulubionych potraw
                                na wynos, dzięki czemu możesz zabrać kawałek Tatr ze sobą, gdziekolwiek jesteś. Nasze menu,
                                pełne lokalnych specjałów i nowoczesnych interpretacji, jest dostępne zarówno dla gości
                                odwiedzających nas na miejscu, jak i tych, którzy preferują smak naszej kuchni w domowym
                                zaciszu.
                            </p>
                        </div>
                        <div class="flex flex-col justify-center items-start gap-6 ">
                            <x-base.link href="tel:+48182071252">Zamów</x-base.link>
                            <x-base.link href="{{ route('menu') }}">Zobacz Menu</x-base.link>

                        </div>
                    </div>

                    <div>


                    </div>
                </div>
            </div>
        </section>

        <section class="lg:mt-60">

            <div id="restaurant_dish_slider" class="2xl:py-72 w-full relative">

                <restaurant-dish-slider :menu="{{ json_encode($menu) }}"></restaurant-dish-slider>

                {{-- <swiper-container class="restaurant-swiper 2xl:absolute 2xl:bottom-0  2xl:right-[0px] w-full 2xl:w-[80%]"
                    space-between="70" autoplay-delay="5000" autoplay-disable-on-interaction="true" grab-cursor="true"
                    loop="true">

                    @foreach ($menu as $item)
                        <swiper-slide
                            class="w-[300px] h-[300px] xs:w-[460px] xs:h-[460px] sm:w-[1000px] sm:h-[800px]  group overflow-hidden">
                            <div class="border border-black w-full h-full relative">
                                <img src="{{ asset($item['img']) }}" alt="" class="w-full h-full object-cover">


                            </div>
                        </swiper-slide>
                    @endforeach



                </swiper-container> --}}
            </div>

        </section>


        <section class="max-w-screen-xl mx-auto pt-24 lg:py-24">

            <div class="flex flex-col px-12 lg:px-24">

                <img src="{{ asset('assets/images/restaurant/hero--big.jpeg') }}" alt=""
                    class="w-full h-[300px] sm:h-[600px] object-cover px-1">

                <div class="flex flex-col lg:flex-row ">
                    <div
                        class="lg:w-2/5 flex flex-col justify-start items-start gap-6 mt-12 order-1 lg:order-none mb-20 lg:mb-0">
                        <h3 class="title--small ">
                            Twoje Wydarzenia w Góralskim Stylu
                        </h3>
                        <p class="text  text-animation ">
                            W Zajeździe Śleboda tworzymy wyjątkowe tło dla każdego rodzaju uroczystości. Od tradycyjnych posiadów przy dźwiękach kapeli góralskiej, przez chrzciny, komunie, aż po wesela i jubileusze - nasza przestrzeń jest idealnym miejscem na celebrowanie ważnych momentów. Oferujemy także kompleksową obsługę cateringową, zarówno dla imprez rodzinnych, jak i okolicznościowych spotkań firmowych. Z pasją i zaangażowaniem dbamy o to, aby każde przyjęcie było niezapomniane, pełne smaków i doskonale zorganizowane, odzwierciedlając bogatą kulturę i tradycję regionu.
                        </p>
                        <h3 class="title--small">
                            Godziny Otwarcia </h3>
                        <span>11:00 - 20:00</span>

                    </div>
                    <div class="lg:w-3/5 bg-white lg:-mt-20 pt-12  lg:p-12 lg:pl-24">
                        <h4 class="tittle--big lg:mb-32 text-3xl lg:text-5xl">
                            "Dania były pyszne, przygotowane z dbałością o każdy szczegół. Wnętrze restauracji zachwyca, łącząc elegancję z górskim klimatem. Idealne miejsce w Tatrach!"</h4>
                    </div>

                </div>
            </div>
        </section>

    </x-layouts.master>
