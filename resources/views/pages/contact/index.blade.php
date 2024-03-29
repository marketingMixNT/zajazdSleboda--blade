<x-layouts.master>

    @section('title', 'Skontaktuj się z nami: Zajazd Śleboda')
    @section('description',
        'Skontaktuj się z Zajazdem Śleboda, by zarezerwować pobyt lub uzyskać więcej informacji.
        Jesteśmy tu, by zapewnić Ci niezapomniany wypoczynek w Tatrach.')

        <x-base.header title="Kontakt" bgi='restaurant-hero'>
        </x-base.header>


        <!--CONTAINER-->
        <section>

            <div class=" max-w-screen-2xl px-12 mt-24 mx-auto text-center">
                <!--HEADING-->
                <x-base.heading subheading="Zajazd Śleboda" heading="Czekamy na Twoją wiadomość"
                    decor="Nawiąż Kontakt i Zacznij Swoją Przygodę" />
                <!--CONTENT-->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24">

                    @include('pages.contact.sections.contact-area')
                    @include('pages.contact.sections.form')

        </section>

        <!--SWIPER-->
        <section id="contact_swiper" class="mb-24">
            <contact-swiper></contact-swiper>
        </section>




    </x-layouts.master>
