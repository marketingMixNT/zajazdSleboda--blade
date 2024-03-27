import "./bootstrap";
import "./partials/hamburger";
import "./partials/headerBgi";
import "./partials/swiper";
import "./partials/preloader";
import "./partials/observer";
import './partials/filterGallery'
import './partials/mobileBottomNav'
import './partials/gLightbox'

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

window.addEventListener("DOMContentLoaded", (event) => {
    const contactSwiperElement = document.querySelector("#contact_swiper");
    const homeApartamentsSwiperElement = document.querySelector("#home_apartaments_swiper");

    if(contactSwiperElement) {
        const mountedContactSwiperApp = contactSwiperApp.mount(contactSwiperElement);
    }

    if(homeApartamentsSwiperElement) {
        const mountedHomeApartamentsSwiperApp = homeApartamentsSwiperApp.mount(homeApartamentsSwiperElement);
    }
});
