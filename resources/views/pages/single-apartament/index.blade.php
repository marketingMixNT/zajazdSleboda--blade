<x-layouts.master>

    @section('title', 'Apartamenty Zajazd Śleboda')
    @section('description', 'desc')

    @include('pages.single-apartament.sections.header')

<main class='py-24'>
 <!--CONTAINER -->
    <div class='grid grid-cols-2 max-w-screen-xl mx-auto gap-24'>
        
        <!--LEFT -->
<div class="flex flex-col gap-20">
    
    <div><span>Lorem ipsum dolor sit amet.</span></div>
    
    <img src="{{asset('assets/images/apartments/apartment-1.jpg')}}" class="h-[700px] object-cover"/>


<div><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, corporis sequi. Fuga fugit, dolor, cupiditate quisquam architecto neque ducimus alias ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima at adipisci ea eaque accusantium nemo voluptatibus quia odit quae corporis.</span></div>
</div>
<!--RIGHT -->
<div class="flex flex-col gap-20">

    <div><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, corporis sequi. Fuga fugit, dolor, cupiditate quisquam architecto neque ducimus alias ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim accusantium non eligendi aut laborum magnam, sed dolore assumenda rerum nemo praesentium, iste est sequi voluptas odio quos commodi inventore dolorem.</span></div>

    <img src="{{asset('assets/images/apartments/apartment-1.jpg')}}" class='pr-32 h-[400px]'/>

    <div>
        <h2 class='h2 mb-12'>Wyposazenie Pokoju</h2>
      
            <ul class="grid grid-cols-2 gap-10"> 
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
                <li class='flex justify-start items-center gap-2'><img src="{{asset('assets/icons/user.svg')}}" class="w-5"/>Wyposazona Lodówka</li>
        </ul>
    </div>

</div>

</div>
<section class="lg:mt-60 pt-24">
   
    <div class="2xl:py-72   w-full relative">
    <swiper-container class="restaurant-swiper 2xl:absolute 2xl:bottom-0  2xl:right-[0px] w-full 2xl:w-[80%]"   space-between="70"
autoplay-delay="5000" autoplay-disable-on-interaction="true" grab-cursor="true" loop="true">

@foreach ($images as $image)
<swiper-slide class="w-[300px] h-[300px] xs:w-[460px] xs:h-[460px] sm:w-[1000px] sm:h-[800px]  group overflow-hidden">
   <div class="border border-black w-full h-full relative">
       <img src="{{ asset($image) }}" alt="" class="w-full h-full object-cover">
      
      
   </div>
</swiper-slide>
@endforeach



</swiper-container>
    </div>
         
</section>

<section class="max-w-screen-xl mx-auto grid grid-cols-2 mb-32">
<div class="flex flex-col gap-10 mt-16">
    <h2 class="h2">Dzieci</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, corporis sequi. Fuga fugit, dolor, cupiditate quisquam architecto neque ducimus alias ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim accusantium non eligendi aut laborum magnam, sed dolore assumenda rerum nemo praesentium, iste est sequi voluptas odio quos commodi inventore dolorem.</p>
    <hr>
</div>
<div></div>
<div class="flex flex-col gap-10 mt-16">
    <h2 class="h2">Zwierzęta</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, corporis sequi. Fuga fugit, dolor, cupiditate quisquam architecto neque ducimus alias ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim accusantium non eligendi aut laborum magnam, sed dolore assumenda rerum nemo praesentium, iste est sequi voluptas odio quos commodi inventore dolorem.</p>
    <hr>
</div>
<div></div>
<div class="flex flex-col gap-10 mt-16">
    <h2 class="h2">Dodatkowe Info</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, corporis sequi. Fuga fugit, dolor, cupiditate quisquam architecto neque ducimus alias ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim accusantium non eligendi aut laborum magnam, sed dolore assumenda rerum nemo praesentium, iste est sequi voluptas odio quos commodi inventore dolorem.</p>
    <hr>
</div>

</section>


    <!--CONTAINER-->
    <section
        id="about"
        class=" bg-bgLight-400"
    >
    <div class="wrapper ">
        <!--HEADING-->
        <x-base.heading-horizontal
            subheading="Zajazd Śleboda"
            heading="Nasze Pozostałe Pokoje"
            decor="Lorem ipsum dolor"
            text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus quas aspernatur eum voluptates, vero doloribus unde deserunt libero assumenda rem odio ad accusantium aliquid autem ipsa eligendi atque quibusdam perferendis."
        />
      
        <!--CONTENT-->
      
        <div class="2xl:py-72 xs:mt-12  w-full relative">

        



<swiper-container class="mySwiper3  menu-swiper 2xl:absolute 2xl:bottom-0  2xl:right-[0px] w-full 2xl:w-[70%]"   space-between="70"
autoplay-delay="5000" autoplay-disable-on-interaction="true" grab-cursor="true" loop="true">

@foreach ($apartaments as $apartament)
<swiper-slide class="w-[300px] h-[300px] xs:w-[460px] xs:h-[460px] sm:w-[500px] sm:h-[500px]  group overflow-hidden">
   <div class="border border-black w-full h-full relative">
       <img src="{{ asset($apartament['image']) }}" alt="" class="w-full h-[75%] sm:h-[80%] object-cover">
       <div class=" border-b border-black flex justify-start items-center h-[25%] sm:h-[20%] px-4 ">
           <h2 class="text-left text-xl xs:text-3xl sm:text-4xl">{{$apartament['title']}}</h2>
       </div>
       <div class="border-b p-4  absolute bottom-0 left-0 right-0 top-[70%] bg-white bg-opacity-100 text-black transform translate-y-full group-hover:translate-y-0 flex flex-col justify-around transition-all duration-300">
           <h2 class="text-left text-xl xs:text-3xl text-black">{{$apartament['title']}}</h2>
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


</main>



</x-layouts.master>
