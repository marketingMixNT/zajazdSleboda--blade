

@props(['href'])

<div class="link-hover text-2xl font-light flex gap-3 justify-center items-center group cursor-pointer">
    <img src="{{asset('/assets/decor--dark.png')}}" alt="" class="w-12 opacity-30 group-hover:opacity-100 duration-300" />
    <span class="pt-2"><a >{{ $slot }}</a> </span>
</div>




