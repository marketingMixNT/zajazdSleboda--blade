
<header
class="relative flex flex-col justify-center items-center h-[calc(100vh-84px)] sm:h-screen mt-[84px] sm:mt-0 w-full bg-cover bg-center bg-gray-400 bg-blend-multiply text-fontLight"
style="background-image: url('{{ asset('assets/images/header--big.jpeg') }}')"
> 
        <!--HEADING-->
        <span
            class="mb-4 font-text text-sm 2xl:text-base font-semibold tracking-widest uppercase"
            >Lorem ipsum dolor sit.</span
        >
        <h1
            class="text-center text-4xl xs:text-5xl sm:text-6xl md:text-7xl 2xl:text-8xl tracking-wider uppercase font-heading font-bold "
        >
            Zajazd Śleboda
        </h1>

        {{-- <x-base.primary-button  :color="'white'" :extraClasses="'lg:hidden mt-12 border-white'">
            <a href="#" target="_blank">Rezerwuj</a>
        </x-base.primary-button> --}}
        <x-base.primary-button class="hidden sm:inline-block"><a href="#" >Rezerwuj</a></x-base.primary-button> 
        <!--RESERVATION PANEL-->
        <div
            class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"
        ></div>

        <a
            href="#about"
            class="absolute bottom-5 left-5 flex text-sm font-heading uppercase"
            >zobacz więcej
            <img
                src="/assets/icons/arrow-down.svg"
                alt=""
                class="w-5 animate-bounce"
        /></a>
    </header>


