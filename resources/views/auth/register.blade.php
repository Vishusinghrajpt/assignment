@extends('layouts.auth')

@section('content')
    @if(false)
    <div class="flex flex-col items-center">
        <h2 class="text-2xl font-bold text-left w-full mb-6 tracking-wide pb-2">Erstellen Sie Ihren Account</h2>
        <form method="POST" action="{{ route('register') }}" class="w-full">
            @csrf
            <div class="space-y-4">
                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <label for="first_name" class="block text-gray-600 mb-1 font-medium">Vorname</label>
                        <div class="relative">
                            <input id="first_name" type="text" class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none @error('first_name') border border-red-500 @enderror" name="first_name" value="{{ old('first_name') }}" required autofocus placeholder="Vorname">
                        </div>
                        @error('first_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-1/2">
                        <label for="last_name" class="block text-gray-600 mb-1 font-medium">Nachname</label>
                        <div class="relative">
                            <input id="last_name" type="text" class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none @error('last_name') border border-red-500 @enderror" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="Nachnamen">
                        </div>
                        @error('last_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <label for="birthdate" class="block text-gray-600 mb-1 font-medium">Geburtsdatum</label>
                <div class="relative">
                    <input type="date" class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none @error('birthdate') border border-red-500 @enderror" name="birthdate" placeholder="Geben Sie Ihr Geburtsdatum an." value="{{ old('birthdate') }}" required>
                </div>
                @error('birthdate')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <label for="email" class="block text-gray-600 mb-1 font-medium">E-Mail Adresse</label>
                <div class="relative">
                    <input id="email" type="email" class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none @error('email') border border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Geben Sie Ihre E-Mail Adresse an.">
                </div>
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <label for="password" class="block text-gray-600 mb-1 font-medium">Passwort</label>
                <div class="relative">
                    <input id="password" type="password" class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none @error('password') border border-red-500 @enderror" name="password" required autocomplete="new-password" placeholder="Geben Sie Ihr Passwort an.">
                </div>
                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <label for="password-confirm" class="block text-gray-600 mb-1 font-medium">Passwort wiederholen</label>
                <div class="relative">
                    <input id="password-confirm" type="password" class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none" name="password_confirmation" required autocomplete="new-password" placeholder="Geben Sie Ihr Passwort erneut an.">
                </div>
                <div class="mb-6 py-3">
                    <label for="terms_and_conditions" class="relative flex items-center cursor-pointer">
                        <input id="terms_and_conditions" type="checkbox" name="terms_and_conditions" class="sr-only">
                        <div class="w-6 h-6 mr-2 bg-primary-light rounded-sm border border-primary-hover flex items-center justify-center">
                            <svg class="w-4 h-4 text-primary fill-current pointer-events-none hidden" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                            </svg>
                        </div>
                        <span class="text-gray-600 font-medium">Ich stimme hiermit den <a class="underline" href="{{ route('agb') }}">AGB's</a> zu.</span>
                    </label>
                </div>
                <div>
                    <button type="submit" class="bg-primary text-white py-2 px-4 rounded w-full border-primary border transition-shadow duration-300 shadow-md hover:shadow-lg hover:bg-primary-hover">Registrieren</button>
                </div>
            </div>
        </form>
    </div>
    @include('auth.register.step1')
    @endif
    @include('auth.register.step2')
@endsection

@push('js')
    <script type="text/javascript">
        const checkbox = document.getElementById('terms_and_conditions');
        const checkmark = checkbox.nextElementSibling.querySelector('svg');

        checkbox.addEventListener('change', function() {
            checkmark.classList.toggle('hidden', !this.checked);
        });
    </script>
@endpush
