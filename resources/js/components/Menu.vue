<template>
    <transition>
        <div
            v-if="showModal"
            class="bg-bg fixed lg:absolute top-[10px] sm:top-[58px] bottom-0 right-0 left-0 xs
            :overflow-hidden z-40"
        >
            <div class="modal">
                <ul
                    class="text-heading text-fontLight-400 flex justify-center items-center flex-col gap-4 xs:gap-8"
                >
                    <li
                        class="xs:text-2xl md:text-7xl font-heading opacity-70 hover:opacity-100 duration-300 link"
                    >
                        <Link>O nas</Link>
                    </li>
                    <li
                        class="xs:text-2xl  md:text-7xl font-heading opacity-70 hover:opacity-100 duration-300 link"
                    >
                        <Link>Apartamenty</Link>
                    </li>
                    <li
                        class="xs:text-2xl  md:text-7xl font-heading opacity-70 hover:opacity-100 duration-300 link"
                    >
                        <Link>Restauracja</Link>
                    </li>
                    <li
                        class="xs:text-2xl  md:text-7xl font-heading opacity-70 hover:opacity-100 duration-300 link"
                    >
                        <Link>Menu</Link>
                    </li>
                    <li
                        class="xs:text-2xl  md:text-7xl font-heading opacity-70 hover:opacity-100 duration-300 link"
                    >
                        <Link>Galeria</Link>
                    </li>
                    <li
                        class="xs:text-2xl  md:text-7xl font-heading opacity-70 hover:opacity-100 duration-300 link"
                    >
                        <Link>Kontakt</Link>
                    </li>
                </ul>
                <img src="/assets/decor--light.png" alt="" class="w-16 md:w-20" />
                <div class="lg:hidden mt-6 absolute right-5 bottom-5">
                    <ul
                        class="justify-center items-center gap-5 list-none text-sm md:text-base flex text-white"
                    >
                        <li><a href="" class="duration-300 lang">PL</a></li>
                        <li><a href="" class="duration-300 lang">ENG</a></li>
                    </ul>
                </div>
                <div class="flex justify-center items-center gap-4 absolute left-5 bottom-5 lg:static">
                    <a href="" target="_blank"
                        ><img
                            src="/assets/icons/facebook--light.svg"
                            alt=""
                            class="w-6 md:w-12 hover:scale-90 duration-300"
                    /></a>
                    <a href="" target="_blank"
                        ><img
                            src="/assets/icons/instagram--light.svg"
                            alt=""
                            class="w-6 md:w-12 hover:scale-90 duration-300"
                    /></a>
                </div>
            </div>
        </div>
    </transition>
</template>

<script setup>


defineProps({
    showModal: Boolean,
});
</script>

<style lang="scss" scoped>
.modal {
    position: absolute;
    top: 71px;
    bottom: 0px;
    right: 0px;
    left: 0px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    @apply bg-black gap-6;
}

.v-enter-active,
.v-leave-active {
    transition: ease, transform 1s cubic-bezier(0.68, -0.55, 0.265, 1.55); /* Dodanie transformacji dla płynnego ruchu */
}

.v-enter-from,
.v-leave-to {
    /* opacity: 0; */
    transform: translateY(-100%);
}

.v-enter-to,
.v-leave-from {
    transform: translateY(0);
}

/* .link {
    @apply text-fontLight font-heading text-6xl lg:text-7xl uppercase opacity-70 hover:opacity-100 transition-opacity;
} */

.link,
.lang {
    position: relative;

    &::after {
        position: absolute;
        content: "";
        top: 100%;
        left: 0;
        width: 100%;
        height: 1px;

        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.5s;
        @apply bg-secondary-400;
    }

    &:hover::after {
        transform: scaleX(1);
        transform-origin: left;
    }
}
</style>