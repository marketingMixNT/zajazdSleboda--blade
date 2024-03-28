<!--CONTAINER-->
<section class=" bg-bgLight-400">
    <div class="wrapper ">
        <!--HEADING-->
        <x-base.heading-horizontal subheading="Zajazd Śleboda" heading="Menu które zachwyca"
            decor="Odkryj Nasze Kulinarnie Arcydzieła"
            text="Nasze menu to starannie skomponowana symfonia lokalnych smaków i nowoczesnej kulinarii. Każde danie opowiada własną historię, zapraszając do odkrywania głębi tradycji i pasji naszych kucharzy. Pozwól sobie na kulinarną podróż, która zadowoli Twoje podniebienie i zostawi niezapomniane wrażenia." />

        <!--CONTENT-->

        <div class="2xl:py-72 xs:mt-12  w-full relative" id="home_restaurant_menu">
            <!--VUE-->
            <home-restaurant-menu :menu="{{ json_encode($menu) }}"></home-restaurant-menu>
        </div>

    </div>
</section>
