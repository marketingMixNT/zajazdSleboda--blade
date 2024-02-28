import "./bootstrap";
import "./partials/hamburger";
import "./partials/headerBgi";
import "./partials/swiper";
import "./partials/footerYear";
import "./partials/preloader";
import "./partials/observer";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// let filterItem = document.querySelector(".items-links");
// let filteImages = document.querySelectorAll(".project-img");

// window.addEventListener("load", () => {
//     filterItem.addEventListener("click", (selectedItem) => {
//         if (selectedItem.target.classList.contains("item-link")) {
//             document
//                 .querySelector(".menu-active")
//                 .classList.remove("menu-active");
//             selectedItem.target.classList.add("menu-active");
//             let filterName = selectedItem.target.getAttribute("data-name");
//             filteImages.forEach((image) => {
//                 let filterImages = image.getAttribute("data-name");
//                 if (filterImages == filterName || filterName == "all") {
//                     image.style.display = "block";
//                 } else {
//                     image.style.display = "none";
//                 }
//             });
//         }
//     });
// });
let filterItem = document.querySelector(".items-links");
let filteImages = document.querySelectorAll('.grid-item');

window.addEventListener("load", () => {
    filterItem.addEventListener("click", (selectedItem) => {
        if (selectedItem.target.classList.contains("item-link")) {
            document
                .querySelector(".menu-active")
                .classList.remove("menu-active");
            selectedItem.target.classList.add("menu-active");
            let filterName = selectedItem.target.getAttribute("data-name");
            filteImages.forEach((image) => {
                let filterImages = image.getAttribute("data-name");
                if (filterImages == filterName || filterName == "all") {
                    image.style.display = "block";
                } else {
                    image.style.display = "none";
                }
            });
        }
    });
});
