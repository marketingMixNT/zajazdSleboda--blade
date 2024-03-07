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
        modifier:1,
        slideShadows: true,
      }"
      
      :modules="modules"
      :initialSlide="3"
      class="mySwiper"
    >
      <swiper-slide
        ><img
          src="/assets/images/about-slider/slider--1.jpeg" /></swiper-slide
      ><swiper-slide
        ><img
          src="/assets/images/about-slider/slider--2.jpg" /></swiper-slide
      ><swiper-slide
        ><img
          src="/assets/images/about-slider/slider--3.jpg" /></swiper-slide
      ><swiper-slide
        ><img
          src="/assets/images/about-slider/slider--4.jpg" /></swiper-slide
      ><swiper-slide
        ><img
          src="/assets/images/about-slider/slider--5.jpeg" /></swiper-slide
      >
      <swiper-slide
        ><img
          src="/assets/images/about-slider/slider--1.jpeg" /></swiper-slide
      ><swiper-slide
        ><img
          src="/assets/images/about-slider/slider--2.jpg" /></swiper-slide
      >
    </swiper>
  </template>
  <script>
    // Import Swiper Vue.js components
    import { Swiper, SwiperSlide } from 'swiper/vue';
  
    // Import Swiper styles
    import 'swiper/css';
  
    import 'swiper/css/effect-coverflow';
    import 'swiper/css/pagination';
  
   
  
    // import required modules
    import { EffectCoverflow, Pagination } from 'swiper/modules';
  
    export default {
      components: {
        Swiper,
        SwiperSlide,
      },
      setup() {
        return {
          modules: [EffectCoverflow, Pagination],
        };
      },
    };
  </script>
  

  <style scoped>
  .swiper {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}

.swiper-slide {
  background-position: center;
  background-size: cover;
  width: 400px;
  height: 400px;
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

  </style>