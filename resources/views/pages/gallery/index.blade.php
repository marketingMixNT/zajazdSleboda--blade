<x-layouts.master>

    @section('title', 'Galeria - tutaj każdy kadr opowiada historię | Zajazd')
    @section('description', 'Odkryj galerię Zajazdu Śleboda: przeglądaj zdjęcia naszych komfortowych pokoi, eleganckiej restauracji i pysznych dań. Wszystko w malowniczej scenerii Tatr')

    <x-base.header title="Galeria" bgi='restaurant-hero'>

        {{-- add call for food button --}}

    </x-base.header>
   
<!--GALLERY STYLE in scss/gallery.scss -->
    <section id="projects">
      <div class="container">

          <!--MENU Links-->
          <div class="items-links px-12 py-24 flex justify-center items-center flex-wrap gap-6">
              <button class="item-link menu-active" data-name="all">Wszytkie</button>
              <button class="item-link" data-name="1">Pokój dwuusobowy</button>
              <button class="item-link" data-name="2">Restauracja</button>
              <button class="item-link" data-name="3">Jedzenie</button>
          </div>
       
          <div class="grid-gallery">


             {{-- APARTMENT 1 --}}
             @foreach ($apartment1 as $img)
             <div class="grid-item" data-name='1'>
                 <a href="{{ asset($img['full']) }}" class="glightbox">
                     <img src="{{ asset($img['thumbnail']) }}"
                         alt="apartment-1" 
                         loading="lazy" />
                 </a>
             </div>
         @endforeach
             {{-- APARTMENT 1 --}}
             @foreach ($apartment2 as $img)
             <div class="grid-item" data-name='2'>
                 <a href="{{ asset($img['full']) }}" class="glightbox">
                     <img src="{{ asset($img['thumbnail']) }}"
                         alt="apartment-2" 
                         loading="lazy" />
                 </a>
             </div>
         @endforeach
             {{-- APARTMENT 1 --}}
             @foreach ($apartment3 as $img)
             <div class="grid-item" data-name='3'>
                 <a href="{{ asset($img['full']) }}" class="glightbox">
                     <img src="{{ asset($img['thumbnail']) }}"
                         alt="apartment-3" 
                         loading="lazy" />
                 </a>
             </div>
         @endforeach

            {{-- <div class="grid-item" data-name='1'>
                <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='2'>
                <a href="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='3'>
                <a href="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='1'>
                <a href="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='3'>
                <a href="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='1'>
                <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='2'>
                <a href="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='3'>
                <a href="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='1'>
                <a href="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='3'>
                <a href="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='1'>
                <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='2'>
                <a href="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='3'>
                <a href="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='1'>
                <a href="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='3'>
                <a href="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='1'>
                <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='2'>
                <a href="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='3'>
                <a href="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='1'>
                <a href="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" alt="image" />
                </a>
            </div>
            <div class="grid-item" data-name='3'>
                <a href="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" class="glightbox">
                    <img src="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" alt="image" />
                </a>
            </div> --}}

        </div>
      </div>
  </section>

</x-layouts.master>
