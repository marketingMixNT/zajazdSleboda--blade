 <!--CONTAINER-->
 <section id="about" class=" bg-bgLight-400">
     <div class="wrapper max-w-screen-2xl overflow-x-hidden md:overflow-x-visible">
         <!--HEADING-->
         <x-base.heading-horizontal subheading="Zajazd Śleboda" heading="Nasze pokoje"
             decor="Idealne miejsce na regenerację ciała i ducha"
             text="W Zajazdzie Śleboda każdy pokój to oaza spokoju i relaksu, zaprojektowana z myślą o Twoim komforcie i zadowoleniu. Nasze pokoje łączą w sobie tradycyjną górską estetykę z nowoczesnymi udogodnieniami, tworząc idealne warunki do odpoczynku po dniu pełnym przygód w Tatrach. Odkryj miejsce, gdzie każdy szczegół został dopracowany, aby zapewnić Ci niezapomniane chwile wypoczynku." />
         <!--CONTENT SWIPER some styles in scss/swiper.scss js in js/partials/swiper.js-->
         {{-- <swiper id="apartament-swiper">
             <!--swiper-container-->
             <swiper-container class="mySwiper apartments-swiper" effect="coverflow" grab-cursor="true"
                 centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0"
                 coverflow-effect-depth="100" coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true"
                 class="swiper-slide" autoplay-delay="5500" autoplay-disable-on-interaction="true">
                 @foreach ($apartments as $apartment)
                     <!--swiper-item-->

                     <swiper-slide
                         class="my-6 lg:my-16 mx-16 w-[280px] h-[430px] xs:w-[350px] xs:h-[550px] md:w-[530px] md:h-[530px] 2xl:w-[700px] 2xl:h-[700px] ">
                         <div class="w-full h-full border border-secondary-400 ">
                             <!--img-->
                             <img src="{{ asset($apartment['img']) }}"
                                 alt="zdjęcie przedstawiające {{ $apartment['title'] }}"
                                 class="w-full h-[70%] sm:h-[80%] object-cover">

                             <!--title-->
                             <div class="flex justify-start items-center h-[30%] sm:h-[20%] ">
                                 <h2 class="px-6 text-xl xs:text-3xl sm:text-4xl  text-left">{{ $apartment['title'] }}
                                 </h2>
                                 <!--info-box-->
                                 <div
                                     class="absolute bottom-0 left-0 right-0 top-[70%] flex flex-col justify-around items-start p-4 border-r border-b border-l border-secondary-400 bg-white bg-opacity-100 opacity-0 text-fontDark info">
                                     <h2 class="text-xl xs:text-2xl lg:text-3xl  text-fontDark text-start">
                                         {{ $apartment['title'] }}</h2>
                                     <a href="{{ $apartment['link'] }}"
                                         class="link-hover text-small xs:text-xl font-light flex justify-start items-center group xs:w-4/5 sm:w-1/2 gap-2 pt-4"><img
                                             src="/assets/decor--dark.png" alt=""
                                             class="w-6 opacity-30 group-hover:opacity-100 duration-300" /><span
                                             class="pt-2">Dowiedz się więcej</span></a>
                                 </div>
                             </div>
                         </div>
                     </swiper-slide>
                 @endforeach
             </swiper-container>
         </swiper> --}}
         <div id="home_apartaments_swiper">

            <home-apartaments-swiper :apartments="{{ json_encode($apartments) }}"></home-apartaments-swiper>
        </div>
        </div>
    </section>
   
