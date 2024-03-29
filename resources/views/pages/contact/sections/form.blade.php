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
            <x-base.input type='email' name='email' id='email' for='email' required>Email</x-base.input>
            <x-base.input type='tel' name='tel' id='tel' for='tel'>Numer
                telefonu</x-base.input>
            @error('tel')
                <p class="text-red-600 text-xs">Numer telefonu nie może zawierać liter</p>
            @enderror
            <x-base.textarea name='content' id='content' for='content' required>Wiadomość</x-base.textarea>
            {!! htmlFormSnippet() !!}
            @if ($errors->has('g-recaptcha-response'))
                <p class="text-red-600 text-xs mt-4">Wpisz ReCaptcha</p>
            @endif


            <x-base.submit-button extraClasses='mt-6'>
                Wyślij</x-base.submit-button>

        </form>

    </div>
@endif
