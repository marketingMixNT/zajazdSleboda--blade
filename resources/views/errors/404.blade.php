<x-layouts.master>

    @section('title', __('home.title') )
    @section('description',
       __('home.description'))

<div class="mt-32 mb-24 sm:mt-52 lg:m-0  lg:min-h-[68vh] flex flex-col justify-center items-center gap-12 lg:gap-24">
    
    <h2 class="text-center text-4xl xs:text-5xl sm:text-6xl md:text-7xl  tracking-wider font-heading font-bold heading-animation">Strona o podanym adresie nie istnieje</h2>
    
    <x-base.link href="{{route('home')}}">Powrót do strony głównej</x-base.link>
</div>

</x-layouts.master>