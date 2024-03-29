<section id='nasze_menu' class=" mx-auto  max-w-screen-lg">

    <div class="flex flex-wrap justify-center items-center gap-4 sm:mx-12  mb-12">
        <x-base.button href="#szef_kuchni_poleca" aria-label='Szef Kuchni Poleca'>Szef Kuchni Poleca</x-base.button>
        <x-base.button href="#sałatki" aria-label="Sałatki">Sałatki</x-base.button>
        <x-base.button href="#zakąski" aria-label='Zakąski'>Zakąski</x-base.button>
        <x-base.button href="#zupy" aria-label="Zupy">Zupy</x-base.button>
        <x-base.button href="#zestawy" aria-label="Zestawy">Zestawy</x-base.button>
        <x-base.button href="#dodatki" aria-label="Dodatki">Dodatki</x-base.button>
        <x-base.button href="#desery" aria-label="desery">Desery</x-base.button>
        <x-base.button href="#pizaa" aria-label="pizza">Pizza</x-base.button>
        <x-base.button href="#napoje" aria-label="napoje">Napoje</x-base.button>
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