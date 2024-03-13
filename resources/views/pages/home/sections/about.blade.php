    <!--CONTAINER-->
    <section id="about"
    >
    <div class="wrapper max-w-screen-2xl">
        <!--HEADING-->
        <x-base.heading
            subheading="Zajazd Śleboda"
            heading="Poznaj nas"
            decor="Twoja Przystań w Sercu Gór"
        />
        <!--CONTENT-->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 py-12 lg:py-24">
            <div >
                    <!--SWIPER-->
                <div class="swiper mySwiper h-[450px] lg:h-[550px] lg:w-[100%] image-animation" >
                    <div class="swiper-wrapper" >
                        
                        @foreach ($images as $img)
                        <div class="swiper-slide"><img src="{{asset($img)}}"  class="w-full h-full object-cover"></div>
                        @endforeach
                    </div>
                  </div>
                  <div class="flex flex-col justify-center items-start gap-6 ml-4 mt-16">
                    <p class="text  text-animation">Odkryj komfort naszych pokoi i magię lokalnej kuchni. Zapraszamy do zapoznania się z ofertą naszych przytulnych pokoi oraz wyjątkowej restauracji, która serwuje dania inspirowane regionalnymi przysmakami. Twoja przygoda w Zajeździe Śleboda zaczyna się tutaj.</p>
                    <x-base.link href="{{route('apartments')}}">Pokoje</x-base.link>
                    <x-base.link href="{{route('restaurant')}}">Restauracja</x-base.link>
                   
                 </div>
                
            </div>
            <!--TEXT-->
            <div class="flex flex-col justify-center items-start gap-12">
                <h2 class="h2">
                    Śleboda czyli wolność
                </h2>
                <p class="text sm:mr-52  text-animation">
                    Witamy w <span class="text-bold">Zajazdzie Śleboda</span>, naszym wyjątkowym zakątku wolności i górskiej tradycji, położonym w malowniczej wsi Ząb – najwyżej położonej osadzie w Polsce. U naszych stóp rozpościerają się majestatyczne widoki na stoki Gubałówki, a serce i dusza góralskiej kultury bije w każdym zakamarku naszego zajazdu. Śleboda to dla nas nie tylko wolność; to przestrzeń, gdzie natura i gościnność tworzą niepowtarzalną atmosferę, wydobywając z każdego to, co najlepsze. 
                </p>
                <!--IMG-->
                <div class="overflow-hidden mt-6 lg:mt-12 w-full md:w-[90%] lg:w-auto mx-auto image-animation">
                    <img
                        src="/assets/images/header--small.jpeg"
                        class="ken-burns w-full h-full object-cover "
                    />
                </div>
            </div>
        </div>
    </div>
    </section>
  

