<x-layouts.master>

    @section('title', __('home.title'))
    @section('description', __('home.description'))

    <main>
        <div class="wrapper max-w-screen-2xl ">
            <!--HEADING-->
            <div class=" mt-12 lg:mt-24">

                <x-base.heading subheading="Zajazd Śleboda" heading="Polityka Prywatności"
                    decor="Twoja Przystań w Sercu Gór" />
            </div>
<section class="flex flex-col justify-start items-start">
            <div class=" my-10 lg:my-16">
                <h2 class="title--small text-xl">Polityka prywatności opisuje zasady przetwarzania przez nas informacji na Twój temat, w tym danych osobowych oraz ciasteczek, czyli tzw. cookies.</h2>
            </div>
{{--1. Informacje ogólne--}}
            <div class="my-6 ">
                <h2 class="title--small text-xl">1. Informacje ogólne</h2>
                <div class="my-6">
                    <h3 class="font-bold text-lg mb-2">Operator Serwisu</h3>
                    <p>Operatorem serwisu oraz Administratorem danych osobowych jest: Jacenty Lassak Szlak Papieski 301, 34-521 Ząb</p>
                    <p>Adres kontaktowy poczty elektronicznej operatora: <a href="mailto:kontakt@zajazdsleboda.pl" class="font-semibold">kontakt@zajazdsleboda.pl</a></p>
                </div>
                <div class="my-6">
                    <h3 class="font-bold text-lg mb-2">Zakres i cel przetwarzania danych osobowych</h3>
                    <p>Operator jest Administratorem Twoich danych osobowych w odniesieniu do danych podanych dobrowolnie w Serwisie.</p>
                    <p>Serwis wykorzystuje dane osobowe w następujących celach:</p>
                    <ul class="list-inside list-disc">
                        <li>Obsługa zapytań przez formularz</li>
                        <li>Prezentacja oferty lub informacji</li>
                    </ul>
                </div>
                <div class="my-6">
                    <h3 class="font-bold text-lg mb-2">Zbieranie danych</h3>
                    <p>Serwis realizuje funkcje pozyskiwania informacji o użytkownikach i ich zachowaniu w następujący sposób:</p>
                    <ul class="list-inside list-disc">
                        <li>Poprzez dobrowolnie wprowadzone w formularzach dane, które zostają wprowadzone do systemów Operatora.</li>
                        <li>Poprzez zapisywanie w urządzeniach końcowych plików cookie (tzw. „ciasteczka”).</li>
                    </ul>
                </div>
            </div>
            {{--2. Wybrane metody ochrony danych stosowane przez Operatora--}}
            <div class="my-6">
                <h2 class="title--small text-xl">2. Wybrane metody ochrony danych stosowane przez Operatora</h2>
                <div class="my-6">
                    <h3 class="font-bold text-lg mb-2">Miejsca logowania i wprowadzania danych osobowych</h3>
                    <p>Miejsca logowania i wprowadzania danych osobowych są chronione w warstwie transmisji (certyfikat SSL). Dzięki temu dane osobowe i dane logowania, wprowadzone na stronie, zostają zaszyfrowane w komputerze użytkownika i mogą być odczytane jedynie na docelowym serwerze.</p>
                </div>
                <div class="my-6">
                    <h3 class="font-bold text-lg mb-2">Zabezpieczenia operacyjne</h3>
                    <ul class="list-inside list-disc">
                        <li>Operator okresowo zmienia swoje hasła administracyjne.</li>
                        <li>W celu ochrony danych Operator regularnie wykonuje kopie bezpieczeństwa.</li>
                    </ul>
                </div>
                <div class="my-6">
                    <h3 class="font-bold text-lg mb-2">Aktualizacja oprogramowania</h3>
                    <p>Istotnym elementem ochrony danych jest regularna aktualizacja wszelkiego oprogramowania, wykorzystywanego przez Operatora do przetwarzania danych osobowych, co w szczególności oznacza regularne aktualizacje komponentów programistycznych.</p>
                </div>
            </div>
{{--3. Hosting--}}
            <div class="my-6">
                <h2 class="title--small text-xl">3. Hosting</h2>
                <div class="my-6">
                    <h3 class="font-bold text-lg mb-2">Informacje o hostingu</h3>
                    <p>Serwis jest hostowany (technicznie utrzymywany) na serwerach operatora: inna firma. Firma hostingowa w celu zapewnienia niezawodności technicznej prowadzi logi na poziomie serwera.</p>
                </div>
                <div class="my-6">
                    <h3 class="font-bold text-lg mb-2">Zapisywane informacje</h3>
                    <p>Zapisowi mogą podlegać:</p>
                    <ul class="list-inside list-disc">
                        <li>zasoby określone identyfikatorem URL (adresy żądanych zasobów – stron, plików),</li>
                        <li>czas nadejścia zapytania,</li>
                        <li>czas wysłania odpowiedzi,</li>
                        <li>nazwę stacji klienta – identyfikacja realizowana przez protokół HTTP,</li>
                        <li>informacje o błędach jakie nastąpiły przy realizacji transakcji HTTP,</li>
                        <li>adres URL strony poprzednio odwiedzanej przez użytkownika (referer link) – w przypadku gdy przejście do Serwisu nastąpiło przez odnośnik,</li>
                        <li>informacje o przeglądarce użytkownika,</li>
                        <li>informacje o adresie IP,</li>
                        <li>informacje diagnostyczne związane z procesem samodzielnego zamawiania usług poprzez rejestratory na stronie,</li>
                        <li>informacje związane z obsługą poczty elektronicznej kierowanej do Operatora oraz wysyłanej przez Operatora.</li>
                    </ul>
                </div>
            </div>
{{--4. Twoje prawa i dodatkowe informacje o sposobie wykorzystania danych--}}
<div class="my-6">
    <h2 class="title--small text-xl">4. Twoje prawa i dodatkowe informacje o sposobie wykorzystania danych</h2>
    <div class="my-6">
        <h3 class="font-bold text-lg mb-2">Przekazywanie danych</h3>
        <p>W niektórych sytuacjach Administrator ma prawo przekazywać Twoje dane osobowe innym odbiorcom, jeśli będzie to niezbędne do wykonania zawartej z Tobą umowy lub do zrealizowania obowiązków ciążących na Administratorze. Dotyczy to takich grup odbiorców:</p>
        <ul class="list-inside list-disc">
            <li>firma hostingowa na zasadzie powierzenia,</li>
            <li>operatorzy płatności,</li>
            <li>upoważnieni pracownicy i współpracownicy, którzy korzystają z danych w celu realizacji celu działania strony,</li>
            <li>firmy, świadczące usługi marketingu na rzecz Administratora.</li>
        </ul>
    </div>
    <div class="my-6">
        <h3 class="font-bold text-lg mb-2">Okres przetwarzania danych</h3>
        <p>Twoje dane osobowe przetwarzane przez Administratora nie dłużej, niż jest to konieczne do wykonania związanych z nimi czynności określonych osobnymi przepisami (np. o prowadzeniu rachunkowości). W odniesieniu do danych marketingowych dane nie będą przetwarzane dłużej niż przez 3 lata.</p>
    </div>
    <div class="my-6">
        <h3 class="font-bold text-lg mb-2">Twoje prawa</h3>
        <p>Przysługuje Ci prawo żądania od Administratora:</p>
        <ul class="list-inside list-disc">
            <li>dostępu do danych osobowych Ciebie dotyczących,</li>
            <li>ich sprostowania,</li>
            <li>usunięcia,</li>
            <li>ograniczenia przetwarzania,</li>
            <li>oraz przenoszenia danych.</li>
        </ul>
        <p>Przysługuje Ci również prawo do złożenia sprzeciwu wobec przetwarzania, skarga do Prezesa Urzędu Ochrony Danych Osobowych oraz informacje o dobrowolności lub konieczności podania danych i o zautomatyzowanym podejmowaniu decyzji, w tym profilowaniu.</p>
    </div>
</div>
{{--5. Informacje w formularzach--}}
<div class="my-6">
    <h2 class="title--small text-xl">5. Informacje w formularzach</h2>
    <div class="my-6">
        <p>Serwis zbiera informacje podane dobrowolnie przez użytkownika, w tym dane osobowe, o ile zostaną one podane.</p>
        <p>Serwis może zapisać informacje o parametrach połączenia (oznaczenie czasu, adres IP).</p>
        <p>Serwis, w niektórych wypadkach, może zapisać informację ułatwiającą powiązanie danych w formularzu z adresem e-mail użytkownika wypełniającego formularz. W takim wypadku adres e-mail użytkownika pojawia się wewnątrz adresu url strony zawierającej formularz.</p>
        <p>Dane podane w formularzu są przetwarzane w celu wynikającym z funkcji konkretnego formularza, np. w celu dokonania procesu obsługi zgłoszenia serwisowego lub kontaktu handlowego, rejestracji usług itp. Każdorazowo kontekst i opis formularza w czytelny sposób informuje, do czego on służy.</p>
    </div>
</div>
{{--6. Logi Administratora--}}
<div class="my-6">
    <h2 class="title--small text-xl">6. Logi Administratora</h2>
    <div class="my-6">
        <p>Informacje o zachowaniu użytkowników w serwisie mogą podlegać logowaniu. Dane te są wykorzystywane w celu administrowania serwisem.</p>
    </div>
</div>
{{--7. Istotne techniki marketingowe--}}
<div class="my-6">
    <h2 class="title--small text-xl">7. Istotne techniki marketingowe</h2>
    <div class="my-6">
        <p>Operator stosuje analizę statystyczną ruchu na stronie, poprzez Google Analytics (Google Inc. z siedzibą w USA). Operator nie przekazuje do operatora tej usługi danych osobowych, a jedynie zanonimizowane informacje. Usługa bazuje na wykorzystaniu ciasteczek w urządzeniu końcowym użytkownika. W zakresie informacji o preferencjach użytkownika gromadzonych przez sieć reklamową Google, użytkownik może przeglądać i edytować informacje wynikające z plików cookies przy pomocy narzędzia: <a href="https://www.google.com/ads/preferences/" class="font-semibold">https://www.google.com/ads/preferences/</a></p>
        <p>Operator stosuje korzysta z piksela Facebooka. Ta technologia powoduje, że serwis Facebook (Facebook Inc. z siedzibą w USA) wie, że dana osoba w nim zarejestrowana korzysta z Serwisu. Bazuje w tym wypadku na danych, wobec których sam jest administratorem, Operator nie przekazuje od siebie żadnych dodatkowych danych osobowych serwisowi Facebook. Usługa bazuje na wykorzystaniu ciasteczek w urządzeniu końcowym użytkownika.</p>
    </div>
</div>
{{--8. Informacja o plikach cookies--}}
<div class="my-6">
    <h2 class="title--small text-xl">8. Informacja o plikach cookies</h2>
    <div class="my-6">
        <p>Serwis korzysta z plików cookies.</p>
        <p>Pliki cookies (tzw. „ciasteczka”) stanowią dane informatyczne, w szczególności pliki tekstowe, które przechowywane są w urządzeniu końcowym Użytkownika Serwisu i przeznaczone są do korzystania ze stron internetowych Serwisu. Cookies zazwyczaj zawierają nazwę strony internetowej, z której pochodzą, czas przechowywania ich na urządzeniu końcowym oraz unikalny numer.</p>
        <p>Podmiotem zamieszczającym na urządzeniu końcowym Użytkownika Serwisu pliki cookies oraz uzyskującym do nich dostęp jest operator Serwisu.</p>
        <p>Pliki cookies wykorzystywane są w następujących celach:</p>
        <ul class="list-inside list-disc">
            <li>utrzymanie sesji użytkownika Serwisu (po zalogowaniu), dzięki której użytkownik nie musi na każdej podstronie Serwisu ponownie wpisywać loginu i hasła;</li>
            <li>realizacji celów określonych powyżej w części "Istotne techniki marketingowe";</li>
        </ul>
        <p>W ramach Serwisu stosowane są dwa zasadnicze rodzaje plików cookies: „sesyjne” (session cookies) oraz „stałe” (persistent cookies). Cookies „sesyjne” są plikami tymczasowymi, które przechowywane są w urządzeniu końcowym Użytkownika do czasu wylogowania, opuszczenia strony internetowej lub wyłączenia oprogramowania (przeglądarki internetowej). „Stałe” pliki cookies przechowywane są w urządzeniu końcowym Użytkownika przez czas określony w parametrach plików cookies lub do czasu ich usunięcia przez Użytkownika.</p>
        <p>Oprogramowanie do przeglądania stron internetowych (przeglądarka internetowa) zazwyczaj domyślnie dopuszcza przechowywanie plików cookies w urządzeniu końcowym Użytkownika. Użytkownicy Serwisu mogą dokonać zmiany ustawień w tym zakresie. Przeglądarka internetowa umożliwia usunięcie plików cookies. Możliwe jest także automatyczne blokowanie plików cookies. Szczegółowe informacje na ten temat zawiera pomoc lub dokumentacja przeglądarki internetowej.</p>
        <p>Ograniczenia stosowania plików cookies mogą wpłynąć na niektóre funkcjonalności dostępne na stronach internetowych Serwisu.</p>
        <p>Pliki cookies zamieszczane w urządzeniu końcowym Użytkownika Serwisu wykorzystywane mogą być również przez współpracujące z operatorem Serwisu podmioty, w szczególności dotyczy to firm: Google (Google Inc. z siedzibą w USA), Facebook (Facebook Inc. z siedzibą w USA), Twitter (Twitter Inc. z siedzibą w USA).</p>
    </div>
</div>
{{--9. Zarządzanie plikami cookies – jak w praktyce wyrażać i cofać zgodę?--}}
<div class="my-6">
    <h2 class="title--small text-xl">9. Zarządzanie plikami cookies – jak w praktyce wyrażać i cofać zgodę?</h2>
    <div class="my-6">
        <p>Jeśli użytkownik nie chce otrzymywać plików cookies, może zmienić ustawienia przeglądarki. Zastrzegamy, że wyłączenie obsługi plików cookies niezbędnych dla procesów uwierzytelniania, bezpieczeństwa, utrzymania preferencji użytkownika może utrudnić, a w skrajnych przypadkach może uniemożliwić korzystanie ze stron www.</p>
        <p>W celu zarządzania ustawienia cookies wybierz z listy poniżej przeglądarkę internetową, której używasz i postępuj zgodnie z instrukcjami:</p>
        <ul class="list-inside list-disc">
            <li>Edge</li>
            <li>Internet Explorer</li>
            <li>Chrome</li>
            <li>Safari</li>
            <li>Firefox</li>
            <li>Opera</li>
        </ul>
        <p>Urządzenia mobilne:</p>
        <ul class="list-inside list-disc">
            <li>Android</li>
            <li>Safari (iOS)</li>
            <li>Windows Phone</li>
        </ul>
        <p>Niniejszy wzór polityki został wygenerowany bezpłatnie, w celach informacyjnych, w oparciu o naszą wiedzę, branżowe praktyki i przepisy prawa obowiązujące na dzień 2018-08-14. Zalecamy sprawdzenie wzoru polityki przed użyciem jej na stronie. Wzór opiera się na najczęściej występujących na stronach internetowych sytuacjach, ale może nie odzwierciedlać pełnej i dokładnej specyfiki Twojej strony www. Przeczytaj uważnie wygenerowany dokument i w razie potrzeb dostosuj go do Twojej sytuacji lub zasięgnij porady prawnej. Nie bierzemy odpowiedzialności za skutki posługiwania się tym dokumentem, ponieważ tylko Ty masz wpływ na to, czy wszystkie informacje w nim zawarte są zgodne z prawdą. Zwróć także uwagę, że Polityka Prywatności, nawet najlepsza, jest tylko jednym z elementów Twojej troski o dane osobowe i prywatność użytkownika na stronie www.</p>
    </div>
</div>
        </section>
        </div>
    </main>

</x-layouts.master>
