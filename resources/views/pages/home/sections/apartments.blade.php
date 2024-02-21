
    <!--CONTAINER-->
    <section
        id="about"
        class=" bg-bgLight-400"
    >
    <div class="wrapper">
        <!--HEADING-->
        <x-base.heading-horizontal
            subheading="Zajazd Śleboda"
            heading="Nasze apartamenty"
            decor="Lorem ipsum dolor"
            text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus quas aspernatur eum voluptates, vero doloribus unde deserunt libero assumenda rem odio ad accusantium aliquid autem ipsa eligendi atque quibusdam perferendis."
        />
        <!--CONTENT-->
        <swiper >
        <swiper-container class="mySwiper apartments-swiper" effect="coverflow" grab-cursor="true" centered-slides="true"
        slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
        coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" class="swiper-slide" autoplay-delay="5500" autoplay-disable-on-interaction="true" >
        @foreach ($apartments as $apartment)
        <swiper-slide class="w-[240px] h-[240px] xs:w-[330px] xs:h-[330px] sm:w-[600px] sm:h-[600px] my-20 mx-12">
            <div class="border border-black w-full h-full  ">
                <img src="{{ asset($apartment['img']) }}" alt="" class="w-full h-[85%] object-cover">

                <div class="flex justify-start items-center h-[15%] px-4">
                    <h2 class="text-xl xs:text-3xl sm:text-4xl">{{$apartment['title']}}</h2>
                    <div class=" border-r border-b border-l border-black p-4  info absolute bottom-0 left-0 right-0 top-[70%] bg-white bg-opacity-100 text-black   opacity-0 flex flex-col justify-around">
                        <h2 class="text-xl xs:text-3xl  text-black text-start">{{$apartment['title']}}</h2>
                        <a
                            href=""
                            class="link-hover text-small xs:text-xl font-light flex justify-start items-center group xs:w-4/5 sm:w-1/2 gap-2"
                            ><img
                                src="/assets/decor--dark.png"
                                alt=""
                                class="w-6 opacity-30 group-hover:opacity-100 duration-300"
                            /><span class="pt-2">Dowiedz się więcej</span></a
                        >
                    </div>
                </div>
            </div>
        </swiper-slide>
        @endforeach
      </swiper-container>
        
            </swiper>
        </div>
    </section>
