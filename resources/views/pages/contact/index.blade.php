<x-layouts.master>

    @section('title', 'Skontaktuj się z nami: Zajazd Śleboda')
    @section('description',
        'Skontaktuj się z Zajazdem Śleboda, by zarezerwować pobyt lub uzyskać więcej informacji.
        Jesteśmy tu, by zapewnić Ci niezapomniany wypoczynek w Tatrach.')

        <x-base.header title="Kontakt" bgi='restaurant-hero'>

            {{-- add call for food button --}}

        </x-base.header>


        <!--CONTAINER-->
        <section>

            <div class=" max-w-screen-2xl px-12 mt-24 mx-auto text-center">
                <!--HEADING-->
                <x-base.heading subheading="Zajazd Śleboda" heading="Czekamy na Twoją wiadomość"
                    decor="Nawiąż Kontakt i Zacznij Swoją Przygodę" />
                <!--CONTENT-->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24">

                    <!--TEXT-->
                    <div>

                        <h2 class="title--big ">Zajazd Śleboda</h2>
                        <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">
                            <div class=" py-12 xs:px-8 text-left">
                                <h3 class="mb-10 uppercase">Napisz do nas</h3>
                                <a class="link-hover text-2xl "
                                    href="mailto:kontakt@zajazdsleboda.pl">kontakt@zajazdsleboda.pl</a>
                            </div>
                            <div class=" py-12 xs:px-8 text-left">
                                <h3 class="mb-10 uppercase">Zadzwoń do nas</h3>
                                <a class="link-hover text-2xl " href="tel:+48182071252">+48 18 207 12 52</a>
                            </div>
                            <div class=" py-12 xs:px-8 text-left">
                                <h3 class="mb-10 uppercase">Lokalizacja</h3>
                                <a class="link-hover text-2xl " href="https://maps.app.goo.gl/9dxJugj5aeMTzkcN6">Szlak
                                    Papieski 252
                                    34-521 Ząb</a>
                                {{-- <x-base.link href="https://maps.app.goo.gl/9dxJugj5aeMTzkcN6">zobacz na mapie</x-base.link> --}}
                            </div>
                            <div class=" py-12 xs:px-8 text-left">
                                <h3 class="mb-10 uppercase">Social Media</h3>
                                <div class="flex justify-center sm:justify-start items-center gap-3">
                                    <a href="https://www.facebook.com/zajazdsleboda/?locale=pl_PL" target="_blank"><img
                                            src="{{ asset('/assets/icons/facebook--dark.svg') }}" alt=""
                                            class="w-10 hover:scale-110 duration-300" /></a>
                                    <a href="https://www.tripadvisor.com/Restaurant_Review-g2712643-d14183598-Reviews-Zajazd_Sleboda-Zab_Lesser_Poland_Province_Southern_Poland.html"
                                        target="_blank"><img src="{{ asset('/assets/icons/tripadvisor--dark.svg') }}"
                                            alt="" class="w-10 hover:scale-110 duration-300" /></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--FORM-->




                    @if (isset($formSubmitted))
                        <div class="flex justify-center items-center">
                            <div class=" flex flex-col gap-4 text-center my-6">

                                <span class="text-5xl font-bold mb-2 font-handwriting">Dziękujemy za wiadomość!</span>
                                <span class="text-xl font-bold">Odpowiemy najszybciej jak to możliwe!</span>
                            </div>
                        </div>
                    @else
                        <div>


                            <form method="post" action="{{ route('contact_form') }}" id="contactForm"
                                class="max-w-md mx-auto flex flex-col justify-start items-start">
                                @csrf
                                <x-base.input type='text' name='name' id='name' for='name' required>Imię i
                                    nazwisko</x-base.input>
                                <x-base.input type='email' name='email' id='email' for='email'
                                    required>Email</x-base.input>
                                <x-base.input type='tel' name='tel' id='tel' for='tel'>Numer
                                    telefonu</x-base.input>
                                @error('tel')
                                    <p class="text-red-600 text-xs">Numer telefonu nie może zawierać liter</p>
                                @enderror
                                <x-base.textarea name='content' id='content' for='content'
                                    required>Wiadomość</x-base.textarea>



                                {{-- <x-base.submit-button 
                                data-sitekey="6LcKTacpAAAAAIIXaj_C_WJKkpJEusdJlJQobXYk"
                                data-callback='onSubmit'
                                data-action='submit'    extraClasses='mt-6'>
                                Wyślij</x-base.submit-button> --}}

                                {!! htmlFormSnippet() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <p class="text-red-600 text-xs mt-4">Wpisz ReCaptcha</p>
                                @endif


                                <x-base.submit-button extraClasses='mt-6'>
                                    Wyślij</x-base.submit-button>

                            </form>

                        </div>
                    @endif
        </section>





        </div>
        </div>



        </div>

        </section>

        <section id="contact_swiper">
            <contact-swiper></contact-swiper>
        </section>

        <section class="max-w-screen-xl mx-auto py-24 ">
            <div class="grid lg:grid-cols-2 gap-24 lg:gap-6">
                <div class="  group flex flex-col justify-center items-center gap-10">

                    <div class="text-center">

                        <span class="uppercase text-xs">Lorem, ipsum dolor</span>
                        <h2 class="title--big text-7xl">Pokoje</h2>
                    </div>

                    <x-base.link href="#">sprawdź</x-base.link>
                    <img class=" h-[200px] w-[70%] object-cover" src="/assets/images/apartments/apartment-1.jpg"
                        alt="">
                </div>
                <div class="  group flex flex-col justify-center items-center gap-10">

                    <div class="text-center">

                        <span class="uppercase text-xs">Lorem, ipsum dolor</span>
                        <h2 class="title--big text-7xl">Restauracja</h2>
                    </div>



                    <x-base.link href="#">sprawdź</x-base.link>
                    <img class=" h-[200px] w-[70%] object-cover" src="/assets/images/apartments/apartment-1.jpg"
                        alt="">
                </div>

            </div>

        </section>


    </x-layouts.master>
