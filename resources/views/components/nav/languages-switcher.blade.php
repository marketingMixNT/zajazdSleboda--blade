<ul class="justify-center items-center gap-5 list-none text-sm hidden lg:flex">
    @foreach (config('localization.locales') as $locale)
    <li><a href="{{route('localization',$locale)}}" class="duration-300 link-hover uppercase">{{ __($locale) }}</a></li>
@endforeach

</ul>
