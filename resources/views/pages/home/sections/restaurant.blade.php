<!--CONTAINER-->
<section id="about" class="section">
    <div class="wrapper max-w-screen-2xl">
        <!--HEADING-->
        <x-base.heading subheading="Zajazd Śleboda" heading="Szlakiem Górskich Smaków" decor="Podróż kulinarna, która pozostaje w pamięci" />
        <!--CONTENT-->
        <div class="sm:grid grid-cols-3 gap-20 2xl:gap-32 py-24">

            <div class="flex flex-col justify-between items-start">
                <div class="w-full h-[60%] overflow-hidden">
                    <div class="w-full h-full object-cover ken-burns">
                        <img src="{{ asset('/assets/images/dish/dish-2.jpeg') }}" alt="" class="w-full h-full object-cover">
                    </div>
                </div>

                <div
                    class="mt-12 sm:mt-0 self-center sm:self-end flex flex-col justify-center sm:justify-end items-center sm:items-end gap-3 mb-12 sm:mb-24 lg:mb-12">
                    <img src="{{ asset('/assets/decor--dark.png') }}" alt="" class="w-20" loading="lazy">
                    <p>Odkryj smaki, które inspirują i zachwycają</p>
                </div>
            </div>



            <div class="flex flex-col justify-between items-start gap-12">

                <div class="flex flex-col justify-between items-start gap-12">
                    <h2 class="title--small">
                        Nasze dania opowiadają historie</h2>
                    <p class="text">
                        W naszej restauracji w <span class="font-bold">Zajeździe Śleboda</span> każdy posiłek to podróż przez bogactwo górskich smaków i aromatów. Z wielką pasją łączymy tradycyjne receptury z nowoczesną kuchnią, tworząc dania, które zadowolą nawet najbardziej wymagających smakoszy. Nasze menu, inspirowane lokalnymi składnikami, zaprasza do odkrywania autentycznych przysmaków regionu w otoczeniu malowniczych widoków Tatr. 
                    </p>

                    <x-base.link>Sprawdź Menu</x-base.link>
                </div>
                <img src="{{ asset('/assets/images/dish/dish-1.jpeg') }}" alt=""
                    class="hidden lg:block w-full object-cover" loading="lazy">
            </div>
            <div class="flex flex-col justify-start">
                <div class="h-[80%] w-full overflow-hidden mt-6">
                    <div class="h-full w-full object-cover ken-burns">
                        <img src="{{ asset('/assets/images/dish/dish-3.jpeg') }}" alt="" class="h-full w-full object-cover" loading="lazy">
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
