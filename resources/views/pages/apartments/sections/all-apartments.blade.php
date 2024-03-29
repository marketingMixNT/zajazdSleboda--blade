<main class="wrapper max-w-screen-2xl mx-auto">

    <x-base.heading-horizontal subheading="Zajazd Śleboda" heading="Pokoje Pełne Górskiego Uroku" decor="Komfort i spokój na każdą porę roku"
        text="Nasze pokoje to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas pokój idealnie dopasowany do Twoich potrzeb i oczekiwań." />

<div class="space-y-20 my-20">


        @foreach ($apartments as $apartment)
        <x-apartment-card :apartment="json_encode($apartment)" />
        @endforeach
    </div>

    

</main>
