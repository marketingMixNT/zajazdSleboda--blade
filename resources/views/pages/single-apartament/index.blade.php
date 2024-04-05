<x-layouts.master>

    @section('title', 'Pokój z 2 Łóżkami King-Size w Zajazd Śleboda: Komfort i Relaks')
    @section('description', 'Odkryj luksusowy pokój z 2 łóżkami king-size w Zajazd Śleboda. Idealne miejsce dla par i rodzin szukających wygody. Rezerwuj teraz i ciesz się niezapomnianym pobytem!')

    @include('pages.apartments.apartment-one.sections.header')

    <main class='pt-24'>
        <!--CONTAINER -->
        <div class='grid grid-cols-2 max-w-screen-xl mx-auto gap-24'>

            <!--LEFT -->
            <div class="flex flex-col gap-20">

                <div><span>Lorem ipsum dolor sit amet.</span></div>

                <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="h-[700px] object-cover" />


                <div><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, corporis sequi. Fuga fugit,
                        dolor, cupiditate quisquam architecto neque ducimus alias ratione. Lorem ipsum, dolor sit amet
                        consectetur adipisicing elit. Minima at adipisci ea eaque accusantium nemo voluptatibus quia
                        odit quae corporis.</span></div>
            </div>
            <!--RIGHT -->
            <div class="flex flex-col gap-20">

                <div><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, corporis sequi. Fuga fugit,
                        dolor, cupiditate quisquam architecto neque ducimus alias ratione. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Enim accusantium non eligendi aut laborum magnam, sed dolore
                        assumenda rerum nemo praesentium, iste est sequi voluptas odio quos commodi inventore
                        dolorem.</span></div>

                <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class='pr-32 h-[400px]' />

                <!--AMENITIES -->
                @include('pages.apartments.apartment-one.sections.amenities')

            </div>

        </div>
        <!--SWIPER -->
        <section class="lg:mt-60 pt-24">

            <div class="2xl:py-72   w-full relative" id="restaurant_dish_slider">
                <restaurant-dish-slider :menu="{{ json_encode($images) }}"></restaurant-dish-slider>
            </div>
        </section>
        <!--INFO -->
      @include('pages.apartments.apartment-one.sections.info')
    </main>

    <!--OTHER ROOMS -->
   @include('pages.apartments.apartment-one.sections.other-rooms')

</x-layouts.master>
