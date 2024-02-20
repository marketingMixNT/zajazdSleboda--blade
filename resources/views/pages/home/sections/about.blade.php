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
                <div class="swiper mySwiper h-[450px] lg:h-[550px] lg:w-[90%]"  >
                    <div class="swiper-wrapper"  >
                      <div class="swiper-slide"><img src="{{asset('assets/images/about-slider/slider--1.jpeg')}}"  class="w-full h-full object-cover"></div>
                      <div class="swiper-slide"><img src="{{asset('assets/images/about-slider/slider--2.jpg')}}"  class="w-full h-full object-cover"></div>
                      <div class="swiper-slide"><img src="{{asset('assets/images/about-slider/slider--3.jpg')}}"  class="w-full h-full object-cover"></div>
                      <div class="swiper-slide"><img src="{{asset('assets/images/about-slider/slider--4.jpg')}}"  class="w-full h-full object-cover"></div>
                    </div>
                  </div>
                
            </div>
            <!--TEXT-->
            <div class="flex flex-col justify-center items-start gap-8">
                <h2 class="text-3xl font-bold tracking-wide m">
                    Nasza Historia
                </h2>
                <p class="font-light sm:mr-52">
                    Założona z miłości do europejskiej kuchni, nasza restauracja
                    przechodziła fascynującą metamorfozę, aby zaoferować Ci
                    dzisiaj wyjątkowe doznania kulinarne. Poznaj naszą
                    inspirującą historię i odkryj, jak pasja i tradycja
                    kształtują każde danie na naszym menu.
                </p>
                <div class="flex flex-col justify-center items-start gap-2">
                    <Link
                        href=""
                        class="link-hover text-xl font-light flex gap-3 justify-center items-center group"
                        ><img
                            src="/assets/decor--dark.png"
                            alt=""
                            class="w-6 opacity-30 group-hover:opacity-100 duration-300"
                        /><span class="pt-2">Apartamenty</span></Link
                    >
                    <Link
                        href=""
                        class="link-hover text-xl font-light flex gap-3 justify-center items-center group"
                        ><img
                            src="/assets/decor--dark.png"
                            alt=""
                            class="w-6 opacity-30 group-hover:opacity-100 duration-300"
                        /><span class="pt-2">Restauracja</span></Link
                    >
                </div>
                <!--IMG-->
                <div class="overflow-hidden mt-6 lg:mt-12 w-full md:w-[90%] lg:w-auto mx-auto">
                    <img
                        src="/assets/images/header--small.jpeg"
                        class="ken-burns w-full h-full object-cover"
                    />
                </div>
            </div>
        </div>
    </div>
    </section>
  
{{-- </template>

<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { EffectCreative, Autoplay } from "swiper/modules";

import Heading from "@/Components/Heading.vue";
import "swiper/css";
import "swiper/css/effect-creative";

const slides = [
    "/assets/images/about-slider/slider--1.jpeg",
    "/assets/images/about-slider/slider--2.jpg",
    "/assets/images/about-slider/slider--3.jpg",
    "/assets/images/about-slider/slider--4.jpg",
    "/assets/images/about-slider/slider--5.jpeg",
];

const modules = [EffectCreative, Autoplay];
</script>

<style scoped>
.ken-burns {
    animation: kenburns 15s ease-out infinite alternate;
}

@keyframes kenburns {
    0% {
        transform: scale(1) translateY(0);
        transform-origin: 50% 16%;
    }
    100% {
        transform: scale(1.3) translateY(-15px);
        transform-origin: top;
    }
}
</style> --}}
