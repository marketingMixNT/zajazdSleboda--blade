import "./bootstrap";
import "./partials/hamburger";
import "./partials/headerBgi";
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
import HomeRestaurantMenu from './Components/HomeRestaurantMenu.vue'
import RestaurantDishSlider from './Components/RestaurantDishSlider.vue'
import FadeSwiper from './Components/FadeSwiper.vue'

const contactSwiperApp = createApp({});
const homeApartamentsSwiperApp = createApp({});
const homeRestaurantMenuApp = createApp({})
const restaurantDishSliderApp = createApp({})
const fadeSwiperApp = createApp({})

contactSwiperApp.component("contact-swiper", ContactSwiper);
homeApartamentsSwiperApp.component("home-apartaments-swiper", HomeApartmentsSwiper);
homeRestaurantMenuApp.component("home-restaurant-menu",HomeRestaurantMenu)
restaurantDishSliderApp.component("restaurant-dish-slider",RestaurantDishSlider)
fadeSwiperApp.component('fade-swiper',FadeSwiper)

window.addEventListener("DOMContentLoaded", (event) => {
    const contactSwiperElement = document.querySelector("#contact_swiper");
    const homeApartamentsSwiperElement = document.querySelector("#home_apartaments_swiper");
    const homeRestaurantMenuElement = document.querySelector("#home_restaurant_menu")
    const restaurantDishSliderElement = document.querySelector('#restaurant_dish_slider')
    const fadeSwiperElement = document.querySelector('#fade_swiper')

    if(contactSwiperElement) {
        const mountedContactSwiperApp = contactSwiperApp.mount(contactSwiperElement);
    }

    if(homeApartamentsSwiperElement) {
        const mountedHomeApartamentsSwiperApp = homeApartamentsSwiperApp.mount(homeApartamentsSwiperElement);
    }
    if(homeRestaurantMenuElement){
        const mountedHomeRestaurantMenuApp = homeRestaurantMenuApp.mount(homeRestaurantMenuElement)
    }
    if(restaurantDishSliderElement){
        const mountedRestaurantDishSliderApp = restaurantDishSliderApp.mount(restaurantDishSliderElement)
    }
    if(fadeSwiperElement){
        const mountedFadeSwiperElement = fadeSwiperApp.mount(fadeSwiperElement)
    }
});
