<section class=" bg-bgLight-400">
    <div class="wrapper ">
        <!--HEADING-->
        <x-base.heading-horizontal subheading="Zajazd Śleboda" heading="Nasze Pozostałe Pokoje"
            decor="Lorem ipsum dolor"
            text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus quas aspernatur eum voluptates, vero doloribus unde deserunt libero assumenda rem odio ad accusantium aliquid autem ipsa eligendi atque quibusdam perferendis." />
        <!--CONTENT-->
        <div class=" xs:mt-12 w-full relative px-6 md:px-12 2xl:px-24" id="other_rooms">
            <other-rooms :apartments="{{ json_encode($apartaments) }}"></other-rooms>

        </div>
</section>