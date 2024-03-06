<main class="wrapper max-w-screen-2xl mx-auto">

    <x-base.heading-horizontal subheading="Zajazd Śleboda" heading="Pokoje Pełne Górskiego Uroku" decor="Komfort i spokój na każdą porę roku"
        text="Nasze pokoje to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas pokój idealnie dopasowany do Twoich potrzeb i oczekiwań." />

<div class="space-y-20 my-20">


        @foreach ($apartments as $apartment)
        <div class="flex flex-col lg:flex-row gap-6 lg:gap-12">
            <!--IMG-->
            <div class="lg:w-1/2"><img src="{{$apartment['img']}}" alt="" loading='lazy'
                    class="w-full h-full 2xl:p-12"></div>
<!--TEXT-->
            <div class="lg:w-1/2 flex flex-col justify-around gap-6 xl:gap-0">
                <h2 class="title--big ">
                   {{$apartment['title']}}
                </h2>
                <div>
    <!--DESC-->
                    <p>{{$apartment['description']}}</p>
                    
                </div>
                <!--AMENITIES-->
                <div class="flex flex-wrap flex-row justify-start items-start lg:items-center gap-10 ">
                    <div class="flex justify-center items-center gap-3">
                        <img src="{{ asset('assets/icons/size.svg') }}" alt="" class="w-5"><span
                            class="text-xl">{{$apartment['surface']}}</span>
                    </div>
                    <div class="flex justify-center items-center gap-3">
                        <img src="{{ asset('assets/icons/user.svg') }}" alt="" class="w-5"><span
                            class="text-xl">{{$apartment['persons']}}</span>
                    </div>
                    <div class="flex justify-center items-center gap-3">
                        <img src="{{ asset('assets/icons/bed.svg') }}" alt="" class="w-5"><span
                            class="text-xl">{{$apartment['bed']}}</span>
                    </div>
                </div>
                <!--LINKS-->
                <div class="flex flex-col justify-center items-start gap-6 ">
                  
                    <x-base.link href="{{route('apartament')}}">Zobacz</x-base.link>
                    <x-base.link href="#">Zarezerwuj</x-base.link>
    
                </div>
            </div>
        </div>
        @endforeach
    </div>

    

</main>
