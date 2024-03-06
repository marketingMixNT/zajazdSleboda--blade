@props(['extraClasses' => '','attributes'=>[]])




<button
    type="submit"
    class="border border-black bg-bgDark-400 px-8 py-3 uppercase text-xs duration-300 text-fontLight close--white hover:text-fontDark {{ $extraClasses }}"
>
    {{ $slot }}
</button>



