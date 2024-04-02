<template>
    <swiper
       
      
       
        :loop="true"
        :grab-cursor="true"
        :autoplay="{
            delay: 5000,
            disableOnInteraction: false,
        }"
        :modules="modules"
        :spaceBetween="10"
        :slidesPerView="1"
        :breakpoints="{
            '1024': {
                slidesPerView: 2,
                spaceBetween: 70,
            },
            
        }"
        class="mySwiper"
    >
        <swiper-slide
            v-for="(apartament, index) in apartments"
            :key="index"
            class="group"
        >
            <div class="border border-black w-full h-full relative">
                <img
                    :src="apartament.img"
                    alt=""
                    class="w-full h-[75%] sm:h-[80%] object-cover"
                />
                <div
                    class="border-b border-black flex justify-start items-center h-[25%] sm:h-[20%] px-4"
                >
                    <h2 class="text-left text-xl xs:text-3xl sm:text-4xl">
                        {{ apartament.title }}
                    </h2>
                </div>
                <div
                    class="border-b p-4 absolute bottom-0 left-0 right-0 top-[70%] bg-white bg-opacity-100 text-black transform translate-y-full group-hover:translate-y-0 flex flex-col justify-around transition-all duration-300"
                >
                    <h2 class="text-left text-xl xs:text-3xl text-black">
                        {{ apartament.title }}
                    </h2>
                    <a
                        href=""
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
import { Autoplay } from "swiper/modules";

// Import Swiper styles
import "swiper/css";

export default {
    props: {
        apartments: Object,
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
.swiper-slide {
    @apply w-[300px] h-[300px] xs:w-[460px] xs:h-[460px] sm:w-[500px] sm:h-[500px]  overflow-hidden;
}

.swiper-container{
    @apply  2xl:absolute 2xl:bottom-0  2xl:right-[0px] w-full 2xl:w-[70%]
}
</style>
