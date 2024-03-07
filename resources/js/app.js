// import "./bootstrap";
// import "./partials/hamburger";
// import "./partials/headerBgi";
// import "./partials/swiper";
// import "./partials/footerYear";
// import "./partials/preloader";
// import "./partials/observer";
// import './partials/filterGallery'
// import './partials/mobileBottomNav'

// import Alpine from "alpinejs";

// window.Alpine = Alpine;

// Alpine.start();


import "./bootstrap";
import "./partials/hamburger";
import "./partials/headerBgi";
import "./partials/swiper";
// import "./partials/footerYear";
import "./partials/preloader";
import "./partials/observer";
import './partials/filterGallery'
import './partials/mobileBottomNav'

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();


import { createApp } from "vue";

// import FooterYear from "./components/footerYear.vue";

// const app = createApp({});

// app.component("footerYear", FooterYear);

// const mountedApp = app.mount("#app");


import ContactSwiper from './Components/ContactSwiper.vue'

const contactSwiperApp = createApp({});

contactSwiperApp.component("contact-swiper", ContactSwiper);

const mountedContactSwiperApp = contactSwiperApp.mount("#contact_swiper");