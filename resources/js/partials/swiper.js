
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

const swiperEl = document.querySelector('.menu-swiper')
Object.assign(swiperEl, {
  slidesPerView: 1,
  spaceBetween: 10,
 
  breakpoints: {
 

    800: {
      slidesPerView: 2,
      spaceBetween: 70,
    },
    1850: {
      slidesPerView: 3,
      spaceBetween: 70,
    },
  },
});
swiperEl.initialize();