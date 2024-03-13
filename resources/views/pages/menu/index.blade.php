<x-layouts.master>

    @section('title', 'Nasze Menu - Podróż po Górskich Smakach | Zajazd Śleboda')
    @section('description', 'Odkryj w Zajeździe Śleboda menu pełne tatrzańskich smaków. Lokalne składniki i tradycyjne receptury w nowoczesnej odsłonie zapewnią niezapomniane wrażenia.')

    <x-base.header title="Menu" bgi='restaurant-hero'>

        {{-- add call for food button --}}

    </x-base.header>



    <!--CONTAINER-->
    <section id="about" class="section">
        <div class="wrapper max-w-screen-2xl">
            <!--HEADING-->
            <x-base.heading subheading="Zajazd Śleboda" heading="Nasze Menu" decor="Zanurz się w Bogactwie Podhalańskich Smaków" />
            <!--CONTENT-->
            <div class="sm:grid grid-cols-3 gap-20 2xl:gap-32 pt-24 lg:py-24">

                <div class="flex flex-col justify-between items-start">
                    <div class="w-full h-[60%] overflow-hidden image-animation">
                        <div class="w-full h-full object-cover ken-burns">
                            <img src="{{ asset('/assets/images/dish/dish-2.jpeg') }}" alt="" class="w-full h-full object-cover">
                        </div>
                    </div>
    
                    <div
                        class="mt-12 sm:mt-0 self-center sm:self-end flex flex-col justify-center sm:justify-end items-center sm:items-end gap-3 mb-12 sm:mb-24 lg:mb-12">
                        <img src="{{ asset('/assets/decor--dark.png') }}" alt="" class="w-20" loading="lazy">
                        <p>Tutaj smak tworzy wspomnienia</p>
                    </div>
                </div>
    
    
    
                <div class="flex flex-col justify-between items-start gap-12">
    
                    <div class="flex flex-col justify-between items-start gap-12">
                        <h2 class="title--small">
                            Smaki, Które Przenoszą Prosto do Serca Tatr</h2>
                        <p class="text">
                            Nasze menu w <span class="font-bold">Zajeździe Śleboda</span> to hołd dla bogactwa górskiej kuchni, serwujący dania przygotowane z najlepszych lokalnych produktów. Każde z nich to podróż kulinarne, które łączą tradycję z nowoczesnością, obiecując niezapomniane doznania smakowe. Zapraszamy do odkrycia autentycznych smaków Tatr, które zadowolą każdego smakosza.
                        </p>
    
                        <x-base.link href="{{route('menu')}}">Sprawdź Menu</x-base.link>
                    </div>
                    <img src="{{ asset('/assets/images/dish/dish-1.jpeg') }}" alt=""
                        class="hidden lg:block w-full object-cover image-animation" loading="lazy">
                </div>
                <div class="flex flex-col justify-start">
                    <div class="h-[80%] w-full overflow-hidden mt-6 image-animation">
                        <div class="h-full w-full object-cover ken-burns">
                            <img src="{{ asset('/assets/images/dish/dish-3.jpeg') }}" alt="" class="h-full w-full object-cover" loading="lazy">
                        </div>
                    </div>
                </div>
    
    
            </div>
       
        </div>
    </section>




    <section id='nasze_menu' class=" mx-auto  max-w-screen-lg">

        <div class="flex flex-wrap justify-center items-center gap-4 sm:mx-12  mb-12">
            <x-base.primary-button href="#szef_kuchni_poleca">Szef Kuchni Poleca</x-base.primary-button>
            <x-base.primary-button href="#sałatki">Sałatki</x-base.primary-button>
            <x-base.primary-button href="#zakąski">Zakąski</x-base.primary-button>
            <x-base.primary-button href="#zupy">Zupy</x-base.primary-button>
            <x-base.primary-button href="#zestawy">Zestawy</x-base.primary-button>
            <x-base.primary-button href="#dodatki">Dodatki</x-base.primary-button>
            <x-base.primary-button href="#desery">Desery</x-base.primary-button>
            <x-base.primary-button href="#pizaa">Pizza</x-base.primary-button>
            <x-base.primary-button href="#napoje">Napoje</x-base.primary-button>
        </div>

        <!--MENU CONTAINER-->
        <div class="mx-auto flex flex-col justify-center items-center mb-24">

            <!--SECTIONS-->
            @include('pages.menu.sections.chef-choice')
            @include('pages.menu.sections.salad')
            @include('pages.menu.sections.appetizers')
            @include('pages.menu.sections.soups')
            @include('pages.menu.sections.sets')
            @include('pages.menu.sections.additives')
            @include('pages.menu.sections.desserts')




            
           



        </div>


    </section>








</x-layouts.master>
