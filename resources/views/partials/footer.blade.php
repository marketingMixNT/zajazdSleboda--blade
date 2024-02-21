
    <footer class="bg-bgDark-400 py-12 text-fontLight pb-24 lg:pb-12">
        <!--CONTAINER-->
        <div class="max-w-screen-xl mx-auto space-y-10">
              <!--GRID-->
        <div class="flex flex-col gap-10 sm:gap-0  s justify-center items-center sm:items-start sm:grid sm:grid-rows-2 lg:grid-rows-1 sm:grid-cols-3 lg:grid-cols-4 mx-4">
<!--ONE-->
            <div
                    class="flex items-center justify-center col-span-4 lg:col-span-1"
                >
                    <Link>
                        <img
                            src="{{asset('/assets/logo/logo--light.png')}}"
                            alt=""
                            class="w-32 lg:ml-16"
                    /></Link>
                </div>
<!--TWO-->
<div
                    class=" mx-4 md:mx-12 flex flex-col gap-6 justify-center items-center text-center sm:justify-start sm:items-start sm:text-start"
                >
                    <div >
                        <h2 class="font-heading text-lg uppercase mb-2">
                            Zadzwoń do nas
                        </h2>
                        <a href="" class="font-thin font-heading link-hover"
                            >123456789</a
                        >
                    </div>
                    <div>
                        <h2 class="font-heading text-lg uppercase mb-2">
                            Napisz do nas
                        </h2>
                        <a href="" class="font-thin font-heading link-hover"
                            >test@test.pl</a
                        >
                    </div>
                </div>
                <!--THREE-->
                <div
                    class="mx-4 md:mx-12 flex flex-col justify-center items-center text-center sm:justify-start sm:items-start sm:text-start"
                >
                    <h2 class="font-heading text-lg uppercase mb-2">Adres</h2>
                    <a href="" class="font-thin font-heading link-hover"
                        >Testowa 123<br />34-400 Nowy Targ</a
                    >
                </div>
                                <!--FOUR-->
                                <div class="mx-4  md:mx-12">
                    <h2 class="font-heading text-lg uppercase mb-2 ">
                        Social Media
                    </h2>
                    <div class="flex justify-center sm:justify-start items-center gap-3">
                        <a href="" target="_blank"
                            ><img
                                src="{{asset('/assets/icons/facebook--light.svg')}}"
                                alt=""
                                class="w-6 hover:scale-110 duration-300"
                        /></a>
                        <a href="" target="_blank"
                            ><img
                                src="{{asset('/assets/icons/instagram--light.svg')}}"
                                alt=""
                                class="w-6 hover:scale-110 duration-300"
                        /></a>
                    </div>
                </div>

        </div><!--END GRID-->
        <!--LINKS-->
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto">

            <hr class="opacity-40" />
            <ul class="flex justify-center items-center gap-8 text-xs py-4">
                <li>
                    <Link class="link-hover">Polityka Prywatności</Link>
                </li>
                <li><Link class="link-hover"> Regulamin</Link></li>
            </ul>
            <hr class="opacity-40" />
        </div>

                 <!--BOTTOM-->
            <div
                class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto text-sm  flex justify-between items-center"
            >
                <a
                    href=""
                    class="flex gap-2 justify-start items-center link-hover"
                >
                    <span >© <span id="footer-year"></span></span>
                    <span>Śleboda Zajazd</span>
                </a>
                <div>
                    <a
                        href="https://marketingmix.pl"
                        target="_blank"
                        class="flex justify-center items-center"
                        ><img
                            src="{{asset('/assets/marketingmix.svg')}}"
                            class="w-40 hover:scale-110 duration-300"
                    /></a>
                </div>
            </div>
        </div><!--END CONTAINER-->
    </footer>


{{-- <script setup>
const today = new Date();

const year = today.getFullYear();

console.log(year);
</script> --}}
