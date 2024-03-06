<div id="menu"
    class=" menu-close bg-bg fixed  top-[10px] sm:top-[58px] bottom-0 right-0 left-0 xs
        :overflow-hidden z-40" >
    <div class="modal">
        <!--NAV ITEMS-->
        <ul class="text-heading text-fontLight-400 flex justify-center items-center flex-col gap-4 xs:gap-8">

            <x-menu_item href="{{ route('apartments') }}">Pokoje</x-menu_item>
            <x-menu_item href="{{ route('restaurant') }}">Restauracja</x-menu_item>
            <x-menu_item href="{{ route('menu') }}">Menu</x-menu_item>
            <x-menu_item href="{{ route('gallery') }}">Galeria</x-menu_item>
            <x-menu_item href="{{ route('contact') }}">Kontakt</x-menu_item>
        </ul>

        <img src="/assets/decor--light.png" alt="" class="w-16 md:w-18 2xl:w-20 2xl:my-6" />
        <!--MOBILE LANGUAGE SWITCHER-->
        <div class="lg:hidden mt-6 absolute right-5 bottom-5">
            <ul class="justify-center items-center gap-5 list-none text-sm md:text-base flex text-white">
                <li><a href="" class="duration-300 lang">PL</a></li>
                <li><a href="" class="duration-300 lang">ENG</a></li>
            </ul>
        </div>
          <!--SOCIAL-->
        <div class="flex justify-center items-center gap-4 absolute left-5 bottom-5 lg:static">
            <a href="https://www.facebook.com/zajazdsleboda/?locale=pl_PL" target="_blank"><img src="{{ asset('/assets/icons/facebook--light.svg') }}" alt=""
                    class="w-6 2xl:w-8 hover:scale-90 duration-300 opacity-70" /></a>
            <a href="https://www.tripadvisor.com/Restaurant_Review-g2712643-d14183598-Reviews-Zajazd_Sleboda-Zab_Lesser_Poland_Province_Southern_Poland.html" target="_blank"><img src="{{ asset('/assets/icons/tripadvisor--light.svg') }}"
                    alt="" class="w-7 2xl:w-9 hover:scale-90 duration-300 opacity-70" /></a>
        </div>
    </div>
</div>
