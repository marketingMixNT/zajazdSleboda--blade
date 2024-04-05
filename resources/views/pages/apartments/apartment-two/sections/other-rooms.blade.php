<section class=" bg-bgLight-400">
    <div class="wrapper max-w-screen-2xl">
        <!--HEADING-->
        <x-base.heading-horizontal subheading="Zajazd Śleboda" heading="Nasze Pozostałe Pokoje"
            decor="Znajdź swój idealny kąt"
            text="Odkryj naszą pełną ofertę pokoi, każdy z nich zaprojektowany z myślą o wyjątkowym komforcie i stylu. Niezależnie od tego, czy szukasz przytulnej przestrzeni na romantyczny wyjazd, czy przestronnego apartamentu dla całej rodziny, nasze pozostałe pokoje z pewnością spełnią Twoje oczekiwania." />
        <!--CONTENT-->
        <div class=" xs:mt-12 w-full relative px-6 md:px-12 2xl:px-24" id="other_rooms">
            <other-rooms :apartments="{{ json_encode($apartaments) }}"></other-rooms>

        </div>
</section>