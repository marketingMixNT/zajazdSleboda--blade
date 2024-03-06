@props(['color' => 'none', 'extraClasses' => '','attributes'=>[]])


<a {{$attributes}}>
<button
    type="button"
    class="border border-black bg-transparent px-8 py-3 uppercase text-xs duration-300 close hover:text-white {{ $extraClasses }}"
>
    {{ $slot }}
</button></a>



