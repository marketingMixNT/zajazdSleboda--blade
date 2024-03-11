


import "./bootstrap";
import "./partials/hamburger";
import "./partials/headerBgi";
import "./partials/swiper";
import "./partials/preloader";
import "./partials/observer";
import './partials/filterGallery'
import './partials/mobileBottomNav'






import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();


import { createApp } from "vue";

import ContactSwiper from './Components/ContactSwiper.vue';
import HomeApartmentsSwiper from './Components/HomeApartmentsSwiper.vue'


const contactSwiperApp = createApp({});
const homeApartamentsSwiperApp = createApp({});


contactSwiperApp.component("contact-swiper", ContactSwiper);
homeApartamentsSwiperApp.component("home-apartaments-swiper", HomeApartmentsSwiper);


const mountedContactSwiperApp = contactSwiperApp.mount("#contact_swiper");
const mountedHomeApartamentsSwiperApp = homeApartamentsSwiperApp.mount("#home_apartaments_swiper");
