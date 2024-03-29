<x-layouts.master>

    @section('title', 'Nasze Menu - Podróż po Górskich Smakach | Zajazd Śleboda')
    @section('description',
        'Odkryj w Zajeździe Śleboda menu pełne tatrzańskich smaków. Lokalne składniki i tradycyjne
        receptury w nowoczesnej odsłonie zapewnią niezapomniane wrażenia.')

        <x-base.header title="Menu" bgi='restaurant-hero'>

            {{-- add call for food button --}}

        </x-base.header>
        <!--CONTAINER-->
        <section id="about" class="section">
            <div class="wrapper max-w-screen-2xl">
                <!--HEADING-->
                <x-base.heading subheading="Zajazd Śleboda" heading="Nasze Menu"
                    decor="Zanurz się w Bogactwie Podhalańskich Smaków" />
                <!--CONTENT-->

                <x-grid-image-section col_one_img="{{ asset('/assets/images/dish/dish-2.jpeg') }}"
                    col_one_desc="Tutaj smak tworzy wspomnienia" col_two_title="Smaki, Które Przenoszą Prosto do Serca Tatr"
                    col_two_img="{{ asset('/assets/images/dish/dish-1.jpeg') }}"
                    col_three_img="{{ asset('/assets/images/dish/dish-3.jpeg') }}">
                    <p class="text">
                        Nasze menu w <span class="font-bold">Zajeździe Śleboda</span> to hołd dla bogactwa górskiej kuchni,
                        serwujący dania przygotowane z najlepszych lokalnych produktów. Każde z nich to podróż kulinarne,
                        które łączą tradycję z nowoczesnością, obiecując niezapomniane doznania smakowe. Zapraszamy do
                        odkrycia autentycznych smaków Tatr, które zadowolą każdego smakosza.
                    </p>

                    <x-base.link href="{{ route('menu') }}">Sprawdź Menu</x-base.link>
                </x-grid-image-section>
            </div>
        </section>

        @include('pages.menu.sections.menu-list')

    </x-layouts.master>
