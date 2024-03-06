<x-layouts.master>

    @section('title', 'Skontaktuj się z nami: Zajazd Śleboda')
    @section('description', 'Skontaktuj się z Zajazdem Śleboda, by zarezerwować pobyt lub uzyskać więcej informacji. Jesteśmy tu, by zapewnić Ci niezapomniany wypoczynek w Tatrach.')

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
    <div class="grid grid-cols-2 grid-rows-2 gap-x-24 h-[80%]">
        <div class=" py-12 px-8 text-left">
            <h3 class="mb-10 uppercase">Napisz do nas</h3>
            <a class="link-hover text-2xl " href="mailto:kontakt@zajazdsleboda.pl">kontakt@zajazdsleboda.pl</a>
        </div>
        <div class=" py-12 px-8 text-left">
            <h3 class="mb-10 uppercase">Zadzwoń do nas</h3>
            <a class="link-hover text-2xl "  href="tel:+48182071252">+48 18 207 12 52</a>
        </div>
        <div class=" py-12 px-8 text-left">
            <h3 class="mb-10 uppercase">Lokalizacja</h3>
            <a class="link-hover text-2xl "  href="https://maps.app.goo.gl/9dxJugj5aeMTzkcN6">Szlak Papieski 252
                34-521 Ząb</a>
            {{-- <x-base.link href="https://maps.app.goo.gl/9dxJugj5aeMTzkcN6">zobacz na mapie</x-base.link> --}}
        </div>
        <div class=" py-12 px-8 text-left">
            <h3 class="mb-10 uppercase">Social Media</h3>
            <div class="flex justify-center sm:justify-start items-center gap-3">
                <a href="https://www.facebook.com/zajazdsleboda/?locale=pl_PL" target="_blank"
                    ><img
                        src="{{asset('/assets/icons/facebook--dark.svg')}}"
                        alt=""
                        class="w-6 hover:scale-110 duration-300"
                /></a>
                <a href="https://www.tripadvisor.com/Restaurant_Review-g2712643-d14183598-Reviews-Zajazd_Sleboda-Zab_Lesser_Poland_Province_Southern_Poland.html" target="_blank"
                    ><img
                        src="{{asset('/assets/icons/tripadvisor--dark.svg')}}"
                        alt=""
                        class="w-7 hover:scale-110 duration-300"
                /></a>
            </div>

        </div>
    </div>
</div>
<!--FORM-->
<div>



    <form method="post" action=""
    class="max-w-md mx-auto flex flex-col justify-start items-start"
    >
    @csrf
      <x-base.input type='text' name='name' id='name' for='name' required>Imię i nazwisko</x-base.input>
      <x-base.input type='email' name='email' id='email' for='email' required>Email</x-base.input>
      <x-base.input type='tel' name='tel' id='tel' for='tel' required>Numer telefonu</x-base.input>
      <x-base.textarea  name='message' id='message' for='message' required>Wiadomość</x-base.textarea>
     
   
    
      <x-base.submit-button extraClasses='mt-6'>Wyślij</x-base.submit-button>
        
      </form>
      





</div>
</div>


          
        </div>
    
</section>




</x-layouts.master>