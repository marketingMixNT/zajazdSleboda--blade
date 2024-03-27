<template>
    <swiper
      :effect="'coverflow'"
      :grabCursor="true"
      :centeredSlides="true"
      :slidesPerView="'auto'"
      :coverflowEffect="{
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      }"
      :autoplay="{
      delay: 2500,
      disableOnInteraction: false,
    }"
      :modules="modules"
      class="mySwiper"
    >
   
                     <!--swiper-item-->

                     <swiper-slide v-for="apartment in apartments" :key="apartment.title"
                         class="">
                         <div class="w-full h-full border border-secondary-400 ">
                             <!--img-->
                             <img :src="apartment.img"
                                 alt=""
                                 class="w-full h-[70%] sm:h-[80%] object-cover">

                             <!--title-->
                             <div class="flex justify-start items-center h-[30%] sm:h-[20%] ">
                                 <h2 class="px-6 text-xl xs:text-3xl sm:text-4xl  text-left">{{apartment.title}}
                                 </h2>
                                 <!--info-box-->
                                 <div
                                     class="absolute bottom-0 left-0 right-0 top-[70%] flex flex-col justify-around items-start p-4 border-r border-b border-l border-secondary-400 bg-white bg-opacity-100 opacity-0 text-fontDark info">
                                     <h2 class="text-xl xs:text-2xl lg:text-3xl  text-fontDark text-start">
                                        {{ apartment.title}}</h2>
                                     <a href="apartment.link"
                                         class="link-hover text-small xs:text-xl font-light flex justify-start items-center group xs:w-4/5 sm:w-1/2 gap-2 pt-4"><img
                                             src="/assets/decor--dark.png" alt=""
                                             class="w-6 opacity-30 group-hover:opacity-100 duration-300" /><span
                                             class="pt-2">Dowiedz się więcej</span></a>
                                 </div>
                             </div>
                         </div>
                     </swiper-slide>
                 
    </swiper>
  </template>
  
  <script setup>
  // Import Swiper Vue.js components
  import { Swiper, SwiperSlide } from 'swiper/vue';
  
  // Import Swiper styles
  import 'swiper/css/effect-coverflow';
  import 'swiper/css/pagination';
  

const props = defineProps({
    apartments:Array
})


  // import required modules
  import { EffectCoverflow, Pagination,Autoplay } from 'swiper/modules';
  
  // Define the images
  const images = [
    'https://swiperjs.com/demos/images/nature-1.jpg',
    'https://swiperjs.com/demos/images/nature-2.jpg',
    'https://swiperjs.com/demos/images/nature-3.jpg',
    'https://swiperjs.com/demos/images/nature-4.jpg',
    'https://swiperjs.com/demos/images/nature-5.jpg',
    'https://swiperjs.com/demos/images/nature-6.jpg',
    'https://swiperjs.com/demos/images/nature-7.jpg',
    'https://swiperjs.com/demos/images/nature-8.jpg',
    'https://swiperjs.com/demos/images/nature-9.jpg',
  ];
  



  // Define the modules
  const modules = [EffectCoverflow, Pagination,Autoplay];
  </script>
  
  <style scoped>
  
  
 
  
  
  
  .swiper-slide {
    @apply my-6 lg:my-16 mx-16 w-[280px] h-[430px] xs:w-[350px] xs:h-[550px] md:w-[530px] md:h-[530px] 2xl:w-[700px] 2xl:h-[700px] 
  }
  
  
  </style>
  