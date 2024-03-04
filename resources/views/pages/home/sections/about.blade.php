{{-- <template> --}}
    <!--CONTAINER-->
    <section
        id="about"
        class="section"
    >
    <div class="wrapper max-w-screen-2xl">
        <!--HEADING-->
        <x-base.heading
            subheading="Zajazd Śleboda"
            heading="Poznaj nas"
            decor="Lorem ipsum dolor"
        />
        <!--CONTENT-->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 py-12 lg:py-24">
            <div>
                    <!--SWIPER-->
                <div class="swiper mySwiper h-[450px] lg:h-[550px] lg:w-[90%]" >
                    <div class="swiper-wrapper" >
                        
                        @foreach ($images as $img)
                        <div class="swiper-slide"><img src="{{asset($img)}}"  class="w-full h-full object-cover"></div>
                        @endforeach
                    </div>
                  </div>
                  d
                
            </div>
            <!--TEXT-->
            <div class="flex flex-col justify-center items-start gap-12">
                <h2 class="h2 ">
                    Nasza Historia
                </h2>
                <p class="text sm:mr-52 text-animation">
                    Założona z miłości do europejskiej kuchni, nasza restauracja
                    przechodziła fascynującą metamorfozę, aby zaoferować Ci
                    dzisiaj wyjątkowe doznania kulinarne. Poznaj naszą
                    inspirującą historię i odkryj, jak pasja i tradycja
                    kształtują każde danie na naszym menu.
                </p>
                <div class="flex flex-col justify-center items-start gap-6 ">
                   <x-base.link href="#">Apartamenty</x-base.link>
                   <x-base.link href="#">Restauracja</x-base.link>
                  
                </div>
                <!--IMG-->
                <div class="overflow-hidden mt-6 lg:mt-12 w-full md:w-[90%] lg:w-auto mx-auto ">
                    <img
                        src="/assets/images/header--small.jpeg"
                        class="ken-burns w-full h-full object-cover"
                    />
                </div>
            </div>
        </div>
    </div>
    </section>
  

