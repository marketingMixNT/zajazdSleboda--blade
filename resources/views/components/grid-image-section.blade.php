@props([
    'col_one_img' => '',
    'col_one_desc' => '',
    'col_two_title' => '',
    'col_two_img' => '',
    'col_three_img' => '',
])

<div class="sm:grid grid-cols-3 gap-20 2xl:gap-32 pt-24 lg:py-24">

    {{-- COL ONE --}}
    <div class="flex flex-col justify-between items-start">
        <div class="w-full h-[60%] overflow-hidden image-animation">
            <div class="w-full h-full object-cover ken-burns">
                <img src="{{ $col_one_img }}" alt="danie w restauracji Zajzd Śleboda" width="430" height="470"
                    class="w-full h-full object-cover">
            </div>
        </div>
        <div
            class="mt-12 sm:mt-0 self-center sm:self-end flex flex-col justify-center sm:justify-end items-center sm:items-end gap-3 mb-12 sm:mb-24 lg:mb-12">
            <img src="{{ asset('/assets/decor--dark.png') }}" alt="" class="w-20" loading="lazy">
            <p>{{ $col_one_desc }}</p>
        </div>
    </div>

    {{-- COL TWO --}}
    <div class="flex flex-col justify-between items-start gap-12">
        <div class="flex flex-col justify-between items-start gap-12">
            <h2 class="title--small">
                {{ $col_two_title }}</h2>
            {{ $slot }}
        </div>
        <img src="{{ $col_two_img }}" alt="danie w restauracji Zajazd Śleboda" width="430" height="320"
            class="hidden lg:block w-full object-cover image-animation" loading="lazy">
    </div>

    {{-- COL THREE --}}
    <div class="flex flex-col justify-start">
        <div class="h-[80%] w-full overflow-hidden mt-6 image-animation">
            <div class="h-full w-full object-cover ken-burns">
                <img src="{{ $col_three_img }}" alt="danie w restauracji Zajazd Śleboda"
                    class="h-full w-full object-cover" loading="lazy" width="430" height="630">
            </div>
        </div>
    </div>

</div>
