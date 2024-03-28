<template>
    <swiper
     
        :autoplay="{
            delay: 5000,
            disableOnInteraction: false,
        }"
        :grabCursor="true"
        :loop="true"
        :slidesPerView="1"
        :spaceBetween="10"
        :breakpoints="{
            '800': {
                slidesPerView: 2,
                spaceBetween: 70,
            },
            '1024': {
                slidesPerView: 3,
                spaceBetween: 70,
            },
        }"
         :modules="modules"
    class="mySwiper"
    >
        <swiper-slide v-for="(item, index) in menu" :key="index" class="group">
            <div class="border border-black w-full h-full relative">
                <img
                    :src="item.img"
                    alt="dania oraz napoje w restauracji Zajazd Śleboda"
                    class="w-full h-[75%] sm:h-[80%] object-cover"
                    width="400"
                    height="400"
                />
                <div
                    class="border-b border-black flex justify-start items-center h-[25%] sm:h-[20%] px-4"
                >
                    <h2 class="text-left text-xl xs:text-3xl sm:text-4xl">
                        {{ item.title }}
                    </h2>
                </div>
                <div
                    class="border-b p-4 absolute bottom-0 left-0 right-0 top-[70%] bg-white bg-opacity-100 text-black transform translate-y-full group-hover:translate-y-0 flex flex-col justify-around transition-all duration-300"
                >
                    <h2 class="text-left text-xl xs:text-3xl text-black">
                        {{ item.title }}
                    </h2>
                    <a
                        :href="item.link"
                        class="link-hover text-small xs:text-xl font-light flex justify-start items-center group xs:w-4/5 sm:w-1/2 gap-2"
                    >
                        <img
                            src="/assets/decor--dark.png"
                            alt=""
                            class="w-6 opacity-30 group-hover:opacity-100 duration-300"
                        />
                        <span class="pt-2">Zobacz</span>
                    </a>
                </div>
            </div>
        </swiper-slide>
    </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from 'swiper/modules';
// Import Swiper styles
import "swiper/css";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    props: {
        menu: Object,
    },
    setup(props) {
        return {
            modules: [Autoplay,],
        };
    },
};
</script>

<style scoped>
.swiper {
    @apply 2xl:absolute 2xl:bottom-0 2xl:right-[0px] w-full 2xl:w-[70%];
}

.swiper-slide {
    @apply first-of-type:ml-2 w-[300px] h-[300px] xs:w-[460px] xs:h-[460px] sm:w-[490px] sm:h-[490px]  overflow-hidden;
}
</style>
