<template>
 
    <button
        class="hamburger hamburger--elastic"
        type="button"
        @click="toggleActive"
        :class="{ 'is-active': isActive }"
    >
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

</template>

<script setup>
import { ref } from "vue";

const isActive = ref(false);

const toggleActive = () => {
isActive.value = !isActive.value;
};
</script>

<style scoped>
/*!
* Hamburgers
* @description Tasty CSS-animated hamburgers
* @author Jonathan Suh @jonsuh
* @site https://jonsuh.com/hamburgers
* @link https://github.com/jonsuh/hamburgers
*/
.hamburger {
padding: 10px 10px;
display: inline-block;
cursor: pointer;
transition-property: opacity, filter;
transition-duration: 0.15s;
transition-timing-function: linear;
font: inherit;
color: inherit;
text-transform: none;
background-color: transparent;
border: 0;
margin: 0;
overflow: visible;
}
.hamburger:hover {
opacity: 0.7;
}
.hamburger.is-active:hover {
opacity: 0.7;
}
.hamburger.is-active .hamburger-inner,
.hamburger.is-active .hamburger-inner::before,
.hamburger.is-active .hamburger-inner::after {
background-color: #000;
}

.hamburger-box {
width: 40px;
height: 24px;
display: inline-block;
position: relative;
}

.hamburger-inner {
display: block;
top: 50%;
margin-top: -2px;
}
.hamburger-inner,
.hamburger-inner::before,
.hamburger-inner::after {
width: 34px;
height: 2px;
background-color: #000;
border-radius: 4px;
position: absolute;
transition-property: transform;
transition-duration: 0.15s;
transition-timing-function: ease;
}
.hamburger-inner::before,
.hamburger-inner::after {
content: "";
display: block;

}
.hamburger-inner::before {
top: -10px;
}
.hamburger-inner::after {
bottom: -10px;
}

/*
* Elastic
*/
.hamburger--elastic .hamburger-inner {
top: 2px;
transition-duration: 0.275s;
transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.hamburger--elastic .hamburger-inner::before {
top: 10px;
transition: opacity 0.125s 0.275s ease;
}
.hamburger--elastic .hamburger-inner::after {
top: 20px;
transition: transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.hamburger--elastic.is-active .hamburger-inner {
transform: translate3d(0, 10px, 0) rotate(135deg);
transition-delay: 0.075s;
}
.hamburger--elastic.is-active .hamburger-inner::before {
transition-delay: 0s;
opacity: 0;
}
.hamburger--elastic.is-active .hamburger-inner::after {
transform: translate3d(0, -20px, 0) rotate(-270deg);
transition-delay: 0.075s;
}
</style>