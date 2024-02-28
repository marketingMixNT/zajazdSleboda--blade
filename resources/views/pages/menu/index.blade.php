<x-layouts.master>

    @section('title', 'Galeria Zajazd Śleboda')
    @section('description', 'desc')

    @include('pages.menu.sections.header')



    <!--CONTAINER-->
    <section id="about" class="section">
        <div class="wrapper max-w-screen-2xl">
            <!--HEADING-->
            <x-base.heading subheading="Zajazd Śleboda" heading="Nasza restauracja" decor="Lorem ipsum dolor" />
            <!--CONTENT-->
            <div class="sm:grid grid-cols-3 gap-20 2xl:gap-32 py-24">

                <div class="flex flex-col justify-between items-start">
                    <img src="{{ asset('/assets/images/dish/dish-2.jpeg') }}" alt=""
                        class="w-full h-[60%] object-cover">

                    <div
                        class="mt-12 sm:mt-0 self-center sm:self-end flex flex-col justify-center sm:justify-end items-center sm:items-end gap-3 mb-12 sm:mb-24 lg:mb-12">
                        <img src="{{ asset('/assets/decor--dark.png') }}" alt="" class="w-20">
                        <p>poznaj nasze smaki</p>
                    </div>
                </div>



                <div class="flex flex-col justify-between items-start gap-12">

                    <div class="flex flex-col justify-between items-start gap-12">
                        <h2 class="text-3xl 2xl:text-4xl font-bold tracking-wide leading-snug">
                            Tradycyjna kuchnia w nowoczesnej odsłonie </h2>
                        <p class="font-light leading-relaxed">
                            Założona z miłości do europejskiej kuchni, nasza restauracja
                            przechodziła fascynującą metamorfozę, aby zaoferować Ci
                            dzisiaj wyjątkowe doznania kulinarne. Poznaj naszą
                            inspirującą historię i odkryj, jak pasja i tradycja
                            kształtują każde danie na naszym menu.
                        </p>

                        <x-base.link>Sprawdź Menu</x-base.link>
                    </div>
                    <img src="{{ asset('/assets/images/dish/dish-1.jpeg') }}" alt=""
                        class="hidden lg:block w-full object-cover">
                </div>
                <div class="flex flex-col justify-start">
                    <img src="{{ asset('/assets/images/dish/dish-3.jpeg') }}" alt=""
                        class="h-[80%] w-full object-cover mt-6">
                </div>


            </div>
        </div>
    </section>




    <section class=" mx-auto  max-w-screen-lg">

        <div class="flex flex-wrap justify-center items-center gap-4  mb-12">
            <x-base.primary-button><a href="#szef_kuchni_poleca">Szef Kuchni Poleca</a></x-base.primary-button>
            <x-base.primary-button><a href="#salatki">Sałatki</a></x-base.primary-button>
            <x-base.primary-button><a href="#zupy">Zupy</a></x-base.primary-button>
            <x-base.primary-button><a href="#zestawy">Zestawy</a></x-base.primary-button>
            <x-base.primary-button><a href="#pizaa">Pizza</a></x-base.primary-button>
            <x-base.primary-button><a href="#napoje">Napoje</a></x-base.primary-button>
        </div>

        <!--MENU CONTAINER-->
        <div class="mx-auto flex flex-col justify-center items-center">

            <!--SECTION-->
            <x-menu.section id="szef_kuchni_poleca">
                <!--TITLE-->
                <x-menu.section-title>Szef Kuchni Poleca</x-menu.section-title>
                <!--ITEMS CONTAINER-->
                <x-menu.items-container class="flex flex-col gap-4">
                    <!--ITEMS-->
                    <x-menu.single-item title='Golonka po bawarsku cena wg wagi /100g' price="8">pieczywo, chrzan,
                        musztarda</x-menu.single-item>
                    <x-menu.single-item title='Polędwiczki w sosie borowikowym' price="45">sos borowikowy, placki
                        ziemniaczane, surówka</x-menu.single-item></x-menu.items-container>
            </x-menu.section>
            <!--SECTION-->
            <x-menu.section id="salatki">
                <!--TITLE-->
                <x-menu.section-title>Sałatki</x-menu.section-title>
                <!--ITEMS CONTAINER-->
                <x-menu.items-container class="flex flex-col gap-4">
                    <!--ITEMS-->
                    <x-menu.single-item title='Golonka po bawarsku cena wg wagi /100g' price="8">pieczywo, chrzan,
                        musztarda</x-menu.single-item>
                    <x-menu.single-item title='Polędwiczki w sosie borowikowym' price="45">sos borowikowy, placki
                        ziemniaczane, surówka</x-menu.single-item></x-menu.items-container>
            </x-menu.section>
            <!--SECTION-->
            <x-menu.section id="zupy">
                <!--TITLE-->
                <x-menu.section-title>Zupy</x-menu.section-title>
                <!--ITEMS CONTAINER-->
                <x-menu.items-container class="flex flex-col gap-4">
                    <!--ITEMS-->
                    <x-menu.single-item title='Golonka po bawarsku cena wg wagi /100g' price="8">pieczywo, chrzan,
                        musztarda</x-menu.single-item>
                    <x-menu.single-item title='Polędwiczki w sosie borowikowym' price="45">sos borowikowy, placki
                        ziemniaczane, surówka</x-menu.single-item></x-menu.items-container>
            </x-menu.section>
           



        </div>


    </section>








</x-layouts.master>
