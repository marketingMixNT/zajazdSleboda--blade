<section>
    <div class=" max-w-screen-2xl px-12 mt-24 mx-auto text-center">
        <!--HEADING-->
        <x-base.heading subheading="Zajazd Śleboda" heading="Elegancja Smaków "
            decor="Poznaj wyrafinowane dania inspirowane tatrzanską naturą" />
        <!--CONTENT-->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24">
            <!--SWIPER-->
            <div id="fade_swiper">
                <fade-swiper :images="{{ json_encode($images) }}">
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
                    <img src="/assets/images/header--small.jpeg" alt="wnętrze restauracji w Zajazd Śleboda" width="645" height="430" class="ken-burns w-full h-full object-cover" />
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