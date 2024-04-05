@props(['apartment'])

@php
    $apartment = json_decode($apartment, true);
@endphp


<div class="flex flex-col lg:flex-row gap-6 lg:gap-12">
    <!--IMG-->
    <div class="lg:w-1/2"><img src="{{ $apartment['img'] }}" alt="wnętrze {{ $apartment['title'] }} w Zajazd Śleboda"
            width="650" height="430" class="w-full h-full 2xl:p-12"></div>
    <!--TEXT-->
    <div class="lg:w-1/2 flex flex-col justify-around gap-6 xl:gap-0">
        <h2 class="title--big ">
            {{ $apartment['title'] }}
        </h2>
        <div>
            <!--DESC-->
            <p>{{ $apartment['description'] }}</p>

        </div>
        <!--AMENITIES-->
        <div class="flex flex-wrap flex-row justify-start items-start lg:items-center gap-10 ">
            <div class="flex justify-center items-center gap-3">
                <img src="{{ asset('assets/icons/size.svg') }}" alt="" class="w-5"><span
                    class="text-xl">{{ $apartment['surface'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-3">
                <img src="{{ asset('assets/icons/user.svg') }}" class="w-5"><span
                    class="text-xl">{{ $apartment['persons'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-3">
                <img src="{{ asset('assets/icons/bed.svg') }}" alt="" class="w-5"><span
                    class="text-xl">{{ $apartment['bed'] }}</span>
            </div>
        </div>
        <!--LINKS-->
        <div class="flex flex-col justify-center items-start gap-6 ">

            <x-base.link href="{{ $apartment['link'] }}">Zobacz</x-base.link>
            <x-base.link href="#">Zarezerwuj</x-base.link>

        </div>
    </div>
</div>
