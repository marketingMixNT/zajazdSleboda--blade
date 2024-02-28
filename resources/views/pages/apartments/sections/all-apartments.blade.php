<main class="wrapper max-w-screen-2xl mx-auto">

    <x-base.heading-horizontal subheading="Zajazd Śleboda" heading="Nasze apartamenty" decor="Lorem ipsum dolor"
        text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus quas aspernatur eum voluptates, vero doloribus unde deserunt libero assumenda rem odio ad accusantium aliquid autem ipsa eligendi atque quibusdam perferendis." />

<div class="space-y-20 my-20">


        @foreach ($apartments as $apartment)
        <div class="flex flex-col lg:flex-row gap-6 lg:gap-12">
            <!--IMG-->
            <div class="lg:w-1/2"><img src="{{$apartment['img']}}" alt="" loading='lazy'
                    class="w-full h-full 2xl:p-12"></div>
<!--TEXT-->
            <div class="lg:w-1/2 flex flex-col justify-around gap-6 lg:gap-0">
                <h2 class="h2 ">
                   {{$apartment['title']}}
                </h2>
                <div>
    <!--DESC-->
                    <p>{{$apartment['description']}}</p>
                    <!--AMENITIES-->
                    <div class="flex flex-col lg:flex-row justify-start items-start lg:items-center gap-10 mt-6 mb-6 2xl:mb-0">
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
                </div>
                <!--LINKS-->
                <div class="flex flex-col justify-center items-start gap-6 ">
                    {{-- <x-base.link href="{{$apartment['link']}}">Zobacz</x-base.link> --}}
                    <x-base.link href="{{route('apartament')}}">Zobacz</x-base.link>
                    <x-base.link href="#">Zarezerwuj</x-base.link>
    
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- <div class="flex gap-12">
        <div class="w-1/2"><img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt=""
                class="w-full h-full"></div>
        <div class="w-1/2 flex flex-col justify-around">
            <h2 class="h2 ">
                Apartament 1
            </h2>
            <div>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
                    officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
                    eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
                    consequatur ullam?</p>
                <div class="flex justify-start items-center gap-10 mt-6">
                    <div class="flex justify-center items-center gap-3">
                        <img src="{{ asset('assets/icons/size.svg') }}" alt="" class="w-5"><span
                            class="text-xl">50 m2</span>
                    </div>
                    <div class="flex justify-center items-center gap-3">
                        <img src="{{ asset('assets/icons/user.svg') }}" alt="" class="w-5"><span
                            class="text-xl">max 4 os.</span>
                    </div>
                    <div class="flex justify-center items-center gap-3">
                        <img src="{{ asset('assets/icons/bed.svg') }}" alt="" class="w-5"><span
                            class="text-xl">dwuosobowe</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center items-start gap-6 ">
                <x-base.link href="#">Zobacz</x-base.link>
                <x-base.link href="#">Zarezerwuj</x-base.link>

            </div>
        </div>
    </div> --}}

</main>
