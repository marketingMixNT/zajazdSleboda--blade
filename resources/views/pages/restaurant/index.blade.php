<x-layouts.master>

    @section('title', 'Restauracja Zajazd Śleboda')
    @section('description',
        'desc')

@include('pages.restaurant.sections.header')

{{-- <template> --}}
    <!--CONTAINER-->
    <section
        
        class="section"
    >
    <div class=" max-w-screen-2xl px-12 mt-24 mx-auto text-center">
        <!--HEADING-->
        <x-base.heading
            subheading="Zajazd Śleboda"
            heading="Nasza restauracja"
            decor="Lorem ipsum dolor"
        />
        <!--CONTENT-->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24">
             <!--SWIPER-->
             <div class="swiper mySwiper lg:h-auto w-full  lg:w-[90%] " >

                <h2 class="h2 mr-40 mb-16 lg:mb-32 text-5xl">
                    Dania tworzone z pasją
                </h2>
                <div class="swiper-wrapper" >
                    
                    @foreach ($images as $img)
                    <div class="swiper-slide"><img src="{{asset($img)}}"  class="w-full h-[450px] lg:h-full object-cover"></div>
                    @endforeach
                </div>
              </div>
            <!--TEXT-->
            <div class="flex flex-col justify-start items-start gap-12">
               
                <p class="text sm:mr-52 text-animation">
                    Założona z miłości do europejskiej kuchni, nasza restauracja
                    przechodziła fascynującą metamorfozę, aby zaoferować Ci
                    dzisiaj wyjątkowe doznania kulinarne. Poznaj naszą
                    inspirującą historię i odkryj, jak pasja i tradycja
                    kształtują każde danie na naszym menu.
                </p>
               
                <!--IMG-->
                <div class="overflow-hidden mt-6 lg:mt-12 w-full md:w-[100%] lg:w-auto mx-auto ">
                    <img
                        src="/assets/images/header--small.jpeg"
                        class="ken-burns w-full h-full object-cover"
                    />
                </div>

                <div class="flex flex-col justify-start items-start gap-12">
                    <h2 class="h2 mr-32 ">
                        Dania tworzone z pasją
                    </h2>
                    <p class="text sm:mr-32 text-animation">
                        Założona z miłości do europejskiej kuchni, nasza restauracja
                        przechodziła fascynującą metamorfozę, aby zaoferować Ci
                        dzisiaj wyjątkowe doznania kulinarne. Poznaj naszą
                        inspirującą historię i odkryj, jak pasja i tradycja
                        kształtują każde danie na naszym menu.
                    </p>
                </div>
                <div class="flex flex-col justify-center items-start gap-6 ">
                    <x-base.link href="#">Apartamenty</x-base.link>
                    <x-base.link href="#">Restauracja</x-base.link>
                   
                 </div>
            </div>

            <div>
             
            
        </div>
        </div>
    </div>
    </section>

    <section class="lg:mt-60">
   
    <div class="2xl:py-72   w-full relative">
    <swiper-container class="restaurant-swiper 2xl:absolute 2xl:bottom-0  2xl:right-[0px] w-full 2xl:w-[80%]"   space-between="70"
autoplay-delay="5000" autoplay-disable-on-interaction="true" grab-cursor="true" loop="true">

@foreach ($menu as $item)
<swiper-slide class="w-[300px] h-[300px] xs:w-[460px] xs:h-[460px] sm:w-[1000px] sm:h-[800px]  group overflow-hidden">
   <div class="border border-black w-full h-full relative">
       <img src="{{ asset($item['img']) }}" alt="" class="w-full h-full object-cover">
      
      
   </div>
</swiper-slide>
@endforeach



</swiper-container>
    </div>
         
</section>


<section class="max-w-screen-xl mx-auto mt-24 ">

    <div class="flex flex-col px-24">
        
        <img src="{{asset('assets/images/restaurant/hero--big.jpeg')}}" alt="" class="w-full h-[600px] object-cover">

        <div class="flex flex-col lg:flex-row ">
            <div class="lg:w-1/3 flex flex-col justify-start items-start gap-6 mt-12 order-1 lg:order-none mb-20 lg:mb-0">
                <h3 class="h3  ">
                    Dania tworzone z pasją
                </h3>
                <p class="text sm:mr-32 text-animation">
                    Założona z miłości do europejskiej kuchni, nasza restauracja
                    przechodziła fascynującą metamorfozę, aby zaoferować Ci
                    dzisiaj wyjątkowe doznania kulinarne. Poznaj naszą
                    inspirującą historię i odkryj, jak pasja i tradycja
                    kształtują każde danie na naszym menu.
                </p>
                <h3 class="h3  ">
Godziny Otwarcia                </h3>
                <span>11:00 - 20:00</span>

            </div>
            <div class="lg:w-2/3 bg-white lg:-mt-20 p-16 pl-32"> <h2 class="h2   lg:mb-32 text-5xl">
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum nobis alias magnam porro accusantium sunt fugit culpa? Corrupti, aperiam excepturi.            </h2></div>

        </div>
    </div>
</section>





</x-layouts.master>