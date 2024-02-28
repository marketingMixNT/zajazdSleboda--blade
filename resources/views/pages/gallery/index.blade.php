<x-layouts.master>

    @section('title', 'Galeria Zajazd Śleboda')
    @section('description', 'desc')

    @include('pages.apartments.sections.header')





    {{-- <section id="projects">
        <div class="container">
            <!--MENU Links-->
            <div class="items-links">
                <div class="item-link menu-active" data-name="all">All</div>
                <div class="item-link" data-name="1">2</div>
                <div class="item-link" data-name="2">3</div>
                <div class="item-link" data-name="3">4</div>
            </div>
            <!--FILTER IMAGE -->
            <div class="gallery">
                <div class="project-img" data-name="1">
                    <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                    </a>
                </div>
                <div class="project-img" data-name="2">
                    <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                    </a>
                </div>
                <div class="project-img" data-name="3">
                    <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                    </a>
                </div>
                <div class="project-img" data-name="1">
                    <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="projects">
      <div class="container">
          <!--MENU Links-->
          <div class="items-links">
              <div class="item-link menu-active" data-name="all">All</div>
              <div class="item-link" data-name="1">2</div>
              <div class="item-link" data-name="2">3</div>
              <div class="item-link" data-name="3">4</div>
          </div>
          <!--FILTER IMAGE -->
          {{-- <div class="gallery">
              <div class="project-image" data-name="1">
                  <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                      <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                  </a>
              </div>
              <div class="project-image" data-name="2">
                  <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                      <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                  </a>
              </div>
              <div class="project-image" data-name="3">
                  <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                      <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                  </a>
              </div>
              <div class="project-image" data-name="1">
                  <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                      <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
                  </a>
              </div>
          </div> --}}
          <div class="grid-gallery">
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
        </div>
      </div>
  </section>


    {{-- <div class="grid-gallery">
        <div class="grid-item">
            <a href="{{ asset('assets/images/apartments/apartment-1.jpg') }}" class="glightbox">
                <img src="{{ asset('assets/images/apartments/apartment-1.jpg') }}" alt="image" />
            </a>
        </div>
        <div class="grid-item">
            <a href="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" class="glightbox">
                <img src="{{ asset('assets/images/apartments/apartment-2.jpeg') }}" alt="image" />
            </a>
        </div>
        <div class="grid-item">
            <a href="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" class="glightbox">
                <img src="{{ asset('assets/images/apartments/apartment-3.jpeg') }}" alt="image" />
            </a>
        </div>
        <div class="grid-item">
            <a href="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" class="glightbox">
                <img src="{{ asset('assets/images/apartments/apartment-4.jpeg') }}" alt="image" />
            </a>
        </div>
        <div class="grid-item">
            <a href="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" class="glightbox">
                <img src="{{ asset('assets/images/apartments/apartment-5.jpeg') }}" alt="image" />
            </a>
        </div>
    </div> --}}






</x-layouts.master>
