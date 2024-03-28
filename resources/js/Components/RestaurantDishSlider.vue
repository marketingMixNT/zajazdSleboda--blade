<template>
    <swiper
        class="restaurant-swiper"
        :autoplay="{
            delay: 5000,
            disableOnInteraction: false,
        }"
        :grabCursor="true"
        :loop="true"
        :spaceBetween="10"
        :slidesPerView="1"
        :breakpoints="{
            '1024': {
                slidesPerView: 2,
                spaceBetween: 70,
            },
        }"
        :modules="modules"
    >
        <swiper-slide v-for="(item, index) in menu" :key="index" class="group">
            <div class="border border-black w-full h-full relative">
                <img
                    :src="item.img"
                    alt=""
                    class="w-full h-full object-cover"
                />
            </div>
        </swiper-slide>
    </swiper>
</template>

<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";

// Import Swiper styles
import "swiper/css";

export default {
    props: {
        menu: Object,
    },
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Autoplay],
        };
    },
};
</script>

<style scoped>
.swiper {
    @apply 2xl:absolute 2xl:bottom-0 2xl:right-[0px] w-full 2xl:w-[80%];
}

.swiper-slide {
    @apply w-[300px] h-[300px] xs:w-[460px] xs:h-[460px] sm:w-[1000px] sm:h-[800px]  overflow-hidden;
}
</style>
