<!-- <template>
      <Swiper
                    :grabCursor="true"
                    :effect="'creative'"
                    :autoplay="{
                        delay: 5500,
                        disableOnInteraction: true,
                    }"
                    :creativeEffect="{
                        prev: {
                            shadow: true,
                            origin: 'left center',
                            translate: ['-5%', 0, -200],
                            rotate: [0, 100, 0],
                        },
                        next: {
                            origin: 'right center',
                            translate: ['5%', 0, -200],
                            rotate: [0, -100, 0],
                        },
                    }"
                    :modules="modules"
                    class="h-[450px] lg:h-[550px] lg:w-[90%]"
                >
                    <swiper-slide v-for="(slide, index) in slides" :key="index"
                        ><img
                            class="w-full h-full object-cover"
                            :src="slide"
                            alt="zdjęcie wnętrza"
                            loading="lazy"
                    /></swiper-slide>
                </Swiper>
</template>

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
    </style> 
     -->

     <template>
        <div>
            
        </div>
     </template>