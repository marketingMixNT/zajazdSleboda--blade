{{-- <template> --}}
    <!--CONTAINER-->
    <section
        id="about"
        class=" bg-bgLight-400"
    >
    <div class="wrapper">
        <!--HEADING-->
        <x-base.heading-horizontal
            subheading="Zajazd Śleboda"
            heading="Nasze apartamenty"
            decor="Lorem ipsum dolor"
            text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus quas aspernatur eum voluptates, vero doloribus unde deserunt libero assumenda rem odio ad accusantium aliquid autem ipsa eligendi atque quibusdam perferendis."
        />
        <!--CONTENT-->
        <swiper-container class="mySwiper" effect="coverflow" grab-cursor="true" centered-slides="true"
        slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
        coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" class="swiper-slide" autoplay-delay="2500" autoplay-disable-on-interaction="true" >
        {{-- <swiper-slide class="w-[240px] h-[240px] xs:w-[330px] xs:h-[330px] sm:w-[500px] sm:h-[500px]">
          <img src=" https://swiperjs.com/demos/images/nature-1.jpg" />
        </swiper-slide> --}}
        <swiper-slide class="w-[240px] h-[240px] xs:w-[330px] xs:h-[330px] sm:w-[500px] sm:h-[500px]">
            <div class="border border-black w-full h-full  ">
                <img src="{{asset('assets/images/apartments/apartment-1.jpg')}}" alt="" class="w-full h-[85%] object-cover">
                <div class="flex justify-start items-center h-[15%] px-4">
                    <h2 class="text-xl xs:text-3xl sm:text-4xl">Apartament 1</h2>
                    <div class=" border-r border-b border-l border-black p-4  info absolute bottom-0 left-0 right-0 top-[70%] bg-white bg-opacity-100 text-black  transform translate-y-full opacity-0 group-hover:opacity-100 flex flex-col justify-around">
                        <h2 class="text-xl xs:text-3xl  text-black">Apartament 1</h2>
                        <Link
                            href=""
                            class="link-hover text-small xs:text-xl font-light flex justify-start items-center group xs:w-4/5 sm:w-1/2 gap-2"
                            ><img
                                src="/assets/decor--dark.png"
                                alt=""
                                class="w-6 opacity-30 group-hover:opacity-100 duration-300"
                            /><span class="pt-2">Dowiedz się więcej</span></Link
                        >
                    </div>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide class="w-[240px] h-[240px] xs:w-[330px] xs:h-[330px] sm:w-[500px] sm:h-[500px]">
            <div class="border border-black w-full h-full  ">
                <img src="{{asset('assets/images/apartments/apartment-1.jpg')}}" alt="" class="w-full h-[85%] object-cover">
                <div class="flex justify-start items-center h-[15%] px-4">
                    <h2 class="text-xl xs:text-3xl sm:text-4xl">Apartament 1</h2>
                    <div class=" border-r border-b border-l border-black p-4  info absolute bottom-0 left-0 right-0 top-[70%] bg-white bg-opacity-100 text-black  transform translate-y-full opacity-0 group-hover:opacity-100 flex flex-col justify-around">
                        <h2 class="text-xl xs:text-3xl  text-black">Apartament 1</h2>
                        <Link
                            href=""
                            class="link-hover text-small xs:text-xl font-light flex justify-start items-center group xs:w-4/5 sm:w-1/2 gap-2"
                            ><img
                                src="/assets/decor--dark.png"
                                alt=""
                                class="w-6 opacity-30 group-hover:opacity-100 duration-300"
                            /><span class="pt-2">Dowiedz się więcej</span></Link
                        >
                    </div>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide class="w-[240px] h-[240px] xs:w-[330px] xs:h-[330px] sm:w-[500px] sm:h-[500px]">
            <div class="border border-black w-full h-full  ">
                <img src="{{asset('assets/images/apartments/apartment-1.jpg')}}" alt="" class="w-full h-[85%] object-cover">
                <div class="flex justify-start items-center h-[15%] px-4">
                    <h2 class="text-xl xs:text-3xl sm:text-4xl">Apartament 1</h2>
                    <div class=" border-r border-b border-l border-black p-4  info absolute bottom-0 left-0 right-0 top-[70%] bg-white bg-opacity-100 text-black  transform translate-y-full opacity-0 group-hover:opacity-100 flex flex-col justify-around">
                        <h2 class="text-xl xs:text-3xl  text-black">Apartament 1</h2>
                        <Link
                            href=""
                            class="link-hover text-small xs:text-xl font-light flex justify-start items-center group xs:w-4/5 sm:w-1/2 gap-2"
                            ><img
                                src="/assets/decor--dark.png"
                                alt=""
                                class="w-6 opacity-30 group-hover:opacity-100 duration-300"
                            /><span class="pt-2">Dowiedz się więcej</span></Link
                        >
                    </div>
                </div>
            </div>
        </swiper-slide>
       
      
      
      </swiper-container>
            {{-- <swiper
                :effect="'coverflow'"
                :grabCursor="true"
                :centeredSlides="true"
                :slidesPerView="'auto'"
                :autoplay="{
                    delay: 5500,
                    disableOnInteraction: true,
                }"
                :coverflowEffect="{
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                }"
                :modules="modules"
                class="mySwiper"
            >
            <swiper-slide v-for="apartment,index in apartments " :key="index" class="overflow-hidden ">
<ApartmentCard :apartment="apartment"/>

        <!-- <div class="border border-black w-full h-full  ">
            <img :src="apartment.img" alt="" class="w-full h-[85%] object-cover">
            <div class="flex justify-start items-center h-[15%] px-4">
                <h2 class="text-4xl">{{apartment.title}}</h2>
                <div class=" border-r border-b border-l border-black p-4  info absolute bottom-0 left-0 right-0 top-[70%] bg-white bg-opacity-100 text-black  transform translate-y-full opacity-0 group-hover:opacity-100 flex flex-col justify-around">
                    <h2 class="text-4xl text-black">{{apartment.title}}</h2>
                    <Link
                        href=""
                        class="link-hover text-xl font-light flex justify-start items-center group w-1/2 gap-2"
                        ><img
                            src="/assets/decor--dark.png"
                            alt=""
                            class="w-6 opacity-30 group-hover:opacity-100 duration-300"
                        /><span class="pt-2">Dowiedz się więcej</span></Link
                    >
                </div>
            </div>
        </div> -->
    </swiper-slide>
            
            
       
                
                
                
               
                  --}}
            </swiper>
        </div>
    </section>
{{-- </template> --}}

{{-- <script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { EffectCoverflow, Pagination, Autoplay } from "swiper/modules";

import ApartmentCard from "@/Components/ApartmentCard.vue";

import Heading from "@/Components/Heading.vue";


import HeadingWithText from "@/Components/HeadingWithText.vue";
import "swiper/css";
import "swiper/css/effect-creative";
import "swiper/css/effect-coverflow";
import "swiper/css/pagination";

const apartments = [
    {
        title:"Apartament 1",
        img:'/assets/images/apartments/apartment-1.jpg',
        link:'#'
    },
    {
        title:"Apartament 2",
        img:'/assets/images/apartments/apartment-2.jpeg',
        link:'#'
    },
    {
        title:"Apartament 3",
        img:'/assets/images/apartments/apartment-3.jpeg',
        link:'#'
    },
    {
        title:"Apartament 4",
        img:'/assets/images/apartments/apartment-4.jpeg',
        link:'#'
    },
    {
        title:"Apartament 5",
        img:'/assets/images/apartments/apartment-5.jpeg',
        link:'#'
    },
];

const modules = [EffectCoverflow, Pagination, Autoplay];
</script>


<style >
.swiper {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}

.swiper-slide {
 @apply w-[240px] h-[240px] xs:w-[330px] xs:h-[330px] sm:w-[500px] sm:h-[500px]
 
}



.swiper-slide .info {
        transition: all 0.5s;
    }
    .swiper-slide-active .info {
        transform: translateY(0);
        opacity: 1;
    }
</style> --}}