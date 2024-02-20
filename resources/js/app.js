import './bootstrap';
import { createApp,ref } from 'vue';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Hamburger from './components/Hamburger.vue'
import Menu from './components/Menu.vue'
import PrimaryButton from './components/base/PrimaryButton.vue'
import Swiper from './components/Swiper.vue'


const app = createApp({
    components: {
        Hamburger,
        Menu,
        PrimaryButton,
        Swiper
    },
    setup() {
        const showModal = ref(false);
        return {
            showModal
        };
    }
});

// app.mount('#app');




