
    <!--CONTAINER-->
    <section
        id="about"
        class=" bg-bgLight-400"
    >
    <div class="wrapper ">
        <!--HEADING-->
        <x-base.heading-horizontal
            subheading="Zajazd Śleboda"
            heading="Menu które zachwyca"
            decor="Odkryj Nasze Kulinarnie Arcydzieła"
            text="Nasze menu to starannie skomponowana symfonia lokalnych smaków i nowoczesnej kulinarii. Każde danie opowiada własną historię, zapraszając do odkrywania głębi tradycji i pasji naszych kucharzy. Pozwól sobie na kulinarną podróż, która zadowoli Twoje podniebienie i zostawi niezapomniane wrażenia."
        />
      
        <!--CONTENT-->
      
        <div class="2xl:py-72 xs:mt-12  w-full relative">

        



<swiper-container class="mySwiper3  menu-swiper 2xl:absolute 2xl:bottom-0  2xl:right-[0px] w-full 2xl:w-[70%]"   space-between="70"
autoplay-delay="5000" autoplay-disable-on-interaction="true" grab-cursor="true" loop="true">

@foreach ($menu as $item)
<swiper-slide class="w-[300px] h-[300px] xs:w-[460px] xs:h-[460px] sm:w-[500px] sm:h-[500px]  group overflow-hidden">
   <div class="border border-black w-full h-full relative">
       <img src="{{ asset($item['img']) }}" alt="" class="w-full h-[75%] sm:h-[80%] object-cover">
       <div class=" border-b border-black flex justify-start items-center h-[25%] sm:h-[20%] px-4 ">
           <h2 class="text-left text-xl xs:text-3xl sm:text-4xl">{{$item['title']}}</h2>
       </div>
       <div class="border-b p-4  absolute bottom-0 left-0 right-0 top-[70%] bg-white bg-opacity-100 text-black transform translate-y-full group-hover:translate-y-0 flex flex-col justify-around transition-all duration-300">
           <h2 class="text-left text-xl xs:text-3xl text-black">{{$item['title']}}</h2>
           <a href="" class="link-hover text-small xs:text-xl font-light flex justify-start items-center group xs:w-4/5 sm:w-1/2 gap-2">
               <img src="/assets/decor--dark.png" alt="" class="w-6 opacity-30 group-hover:opacity-100 duration-300"/>
               <span class="pt-2">Zobacz</span>
           </a>
       </div>
   </div>
</swiper-slide>
@endforeach



</swiper-container>

</div>
    
    
    
    
    


</div>
    </section>

<style>
     swiper-container {
    
      width: 70%;
      height: 100%;
    
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</style>
