<ul class="justify-center items-center gap-5 list-none text-sm hidden lg:flex">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="duration-300 link-hover uppercase">
                    {{ $properties['slug'] }}
                </a>
            </li>
          
        @endforeach
      
    </ul>