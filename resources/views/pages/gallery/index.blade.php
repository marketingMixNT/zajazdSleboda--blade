<x-layouts.master>

    @section('title', 'Galeria Zajazd Śleboda')
    @section('description', 'desc')

    @include('pages.apartments.sections.header')




<div class="flex justify-center items-center mt-20 gap-6">
    <button class="border border-black px-8 py-2">1</button>
    <button class="border border-black px-8 py-2">2</button>
    <button class="border border-black px-8 py-2">3</button>
    <button class="border border-black px-8 py-2">4</button>
</div>


 
  

<div class="grid-gallery">
    <div class="grid-item">
  <a href="{{asset('assets/images/apartments/apartment-1.jpg')}}" class="glightbox">
    <img src="{{asset('assets/images/apartments/apartment-1.jpg')}}" alt="image" />
  </a>
    </div>
    <div class="grid-item">
  <a href="{{asset('assets/images/apartments/apartment-2.jpeg')}}" class="glightbox">
    <img src="{{asset('assets/images/apartments/apartment-2.jpeg')}}" alt="image" />
  </a>
    </div>
    <div class="grid-item">
  <a href="{{asset('assets/images/apartments/apartment-3.jpeg')}}" class="glightbox">
    <img src="{{asset('assets/images/apartments/apartment-3.jpeg')}}" alt="image" />
  </a>
    </div>
    <div class="grid-item">
  <a href="{{asset('assets/images/apartments/apartment-4.jpeg')}}" class="glightbox">
    <img src="{{asset('assets/images/apartments/apartment-4.jpeg')}}" alt="image" />
  </a>
    </div>
    <div class="grid-item">
  <a href="{{asset('assets/images/apartments/apartment-5.jpeg')}}" class="glightbox">
    <img src="{{asset('assets/images/apartments/apartment-5.jpeg')}}" alt="image" />
  </a>
    </div>
</div>






</x-layouts.master>
