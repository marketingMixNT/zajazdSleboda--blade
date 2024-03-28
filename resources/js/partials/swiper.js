
import Swiper from 'swiper';


var swiper = new Swiper(".mySwiper", {
    grabCursor: true,
    autoplay: {
        delay: 5500,
        disableOnInteraction: true,
    },
    effect: "creative",
    creativeEffect: {
        prev: {
            shadow: true,
            translate: [0, 0, -400],
        },
        next: {
            translate: ["100%", 0, 0],
        },
    },
});



const swiperRestaurant = document.querySelector('.restaurant-swiper')
if(swiperRestaurant){
  Object.assign(swiperRestaurant, {
    slidesPerView: 1,
    spaceBetween: 10,
   
    breakpoints: {
   
  
      1024: {
        slidesPerView: 2,
        spaceBetween: 70,
      },
      
    },
  });
  swiperRestaurant.initialize();
}