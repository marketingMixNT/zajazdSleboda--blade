<nav class="bg-primary-400 fixed left-0 top-0 right-0 z-50">
    <div
        class="flex justify-between items-center max-w-screen-xl mx-auto py-4 sm:py-10 px-4 md:px-12 2xl:px-0"
    >
        <!--LEFT SIDE-->
        <div class="box ">
            <div>
                <hamburger @click="showModal = !showModal"/>
            </div>
            <a href="#" class="text-sm mb-1 hidden lg:inline-block duration-300 tel"
                >+48 123 456 789</a
            >
        </div>
        <!--CENTER-->
        <a href="/" class="absolute left-1/2 transform -translate-x-1/2 ">
        <img
            src="/assets/logo/logo--dark.png"
            alt="logo Śleboda Zajazd"
            class=" w-16 sm:w-28 "
        />
    </a>
        <!--RIGHT SIDE-->
        <div class="box ">
        
            <x-languages-switcher/>
            <x-base.primary-button class="hidden sm:inline-block"><a href="#" >Rezerwuj</a></x-base.primary-button> 
        </div>
    </div>

    <teleport to="body">
        <menu :showModal="showModal" />
    </teleport>
</nav>