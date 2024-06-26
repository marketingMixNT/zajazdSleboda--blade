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

import ContactSwiper from './components/ContactSwiper.vue';
import HomeApartmentsSwiper from './components/HomeApartmentsSwiper.vue'
import HomeRestaurantMenu from './components/HomeRestaurantMenu.vue'
import RestaurantDishSlider from './components/RestaurantDishSlider.vue'
import FadeSwiper from './components/FadeSwiper.vue'
import OtherRooms from './components/OtherRooms.vue'
import ImageSlider from './components/ImageSlider.vue'

const contactSwiperApp = createApp({});
const homeApartamentsSwiperApp = createApp({});
const homeRestaurantMenuApp = createApp({})
const restaurantDishSliderApp = createApp({})
const fadeSwiperApp = createApp({})
const otherRoomsApp = createApp({})
const imageSliderApp = createApp({})

contactSwiperApp.component("contact-swiper", ContactSwiper);
homeApartamentsSwiperApp.component("home-apartaments-swiper", HomeApartmentsSwiper);
homeRestaurantMenuApp.component("home-restaurant-menu",HomeRestaurantMenu)
restaurantDishSliderApp.component("restaurant-dish-slider",RestaurantDishSlider)
fadeSwiperApp.component('fade-swiper',FadeSwiper)
otherRoomsApp.component('other-rooms',OtherRooms)
imageSliderApp.component('image-slider',ImageSlider)

window.addEventListener("DOMContentLoaded", (event) => {
    const contactSwiperElement = document.querySelector("#contact_swiper");
    const homeApartamentsSwiperElement = document.querySelector("#home_apartaments_swiper");
    const homeRestaurantMenuElement = document.querySelector("#home_restaurant_menu")
    const restaurantDishSliderElement = document.querySelector('#restaurant_dish_slider')
    const fadeSwiperElement = document.querySelector('#fade_swiper')
    const otherRoomsElement = document.querySelector('#other_rooms')
    const imageSliderElement = document.querySelector('#image_slider')

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
    if(otherRoomsElement){
        otherRoomsApp.mount(otherRoomsElement)
    }
    if(imageSliderElement){
       imageSliderApp.mount(imageSliderElement)
    }
});
