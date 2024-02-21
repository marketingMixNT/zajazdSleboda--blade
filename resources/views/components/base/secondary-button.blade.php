@props(['color' => 'none', 'extraClasses' => ''])

<button
    type="button"
    class="border border-white bg-transparent px-8 py-3 uppercase text-xs duration-300 close--white hover:text-fontDark {{ $extraClasses }}"
>
    {{ $slot }}
</button>