<template>
    <swiper
        :spaceBetween="30"
        :effect="'fade'"
        :loop="true"
        :grabCursor="true"
        :autoplay="{
            delay: 2500,
            disableOnInteraction: false,
        }"
        :modules="modules"
        
    >
        <swiper-slide v-for="(img, index) in images" :key="index"
            ><img :src="img" alt="wnętrze restauracji oraz apartamentów w Zajazd Śleboda" loading="lazy" width="720" height="550"
        /></swiper-slide>
    </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/effect-fade";
import "swiper/css/navigation";
import "swiper/css/pagination";

// import required modules
import { EffectFade, Autoplay } from "swiper/modules";

export default {
    props: {
        images: Array,
       
    },
    components: {
        Swiper,
        SwiperSlide,
    },
    setup(props) {
        console.log(props.images);
        return {
            modules: [EffectFade, Autoplay],
        };
    },
};
</script>

<style scoped>
.swiper {
     /* @apply lg:h-[60%] w-full  lg:w-[90%]  lg:py-24;  */
     @apply h-[450px] lg:h-[550px] lg:w-[100%];
}

.swiper-slide {
    @apply w-full h-[450px] lg:h-full;
}

.swiper-slide img {
    @apply w-full lg:h-full object-cover;
}
</style>


