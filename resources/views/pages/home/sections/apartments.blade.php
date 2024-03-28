 <!--CONTAINER-->
 <section  class=" bg-bgLight-400">
     <div class="wrapper max-w-screen-2xl overflow-x-hidden md:overflow-x-visible">
         <!--HEADING-->
         <x-base.heading-horizontal subheading="Zajazd Śleboda" heading="Nasze pokoje"
             decor="Idealne miejsce na regenerację ciała i ducha"
             text="W Zajazdzie Śleboda każdy pokój to oaza spokoju i relaksu, zaprojektowana z myślą o Twoim komforcie i zadowoleniu. Nasze pokoje łączą w sobie tradycyjną górską estetykę z nowoczesnymi udogodnieniami, tworząc idealne warunki do odpoczynku po dniu pełnym przygód w Tatrach. Odkryj miejsce, gdzie każdy szczegół został dopracowany, aby zapewnić Ci niezapomniane chwile wypoczynku." />
       
         <div id="home_apartaments_swiper">

            <home-apartaments-swiper :apartments="{{ json_encode($apartments) }}"></home-apartaments-swiper>
        </div>
        </div>
    </section>
   
