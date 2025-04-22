@extends('layouts.auth')

@section('content')
    <div class="flex justify-center items-center p-3 mt-auto mb-auto">
        <div class="w-[376px] mx-auto">
            <div class="flex flex-col items-center">
                <h2 class="text-2xl font-bold text-left w-full mb-6 tracking-wide pb-2">Passwort zurücksetzen!</h2>
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf
                    <div class="space-y-4">
                        <label for="email" class="block text-gray-600 mb-1 font-medium">Email</label>
                        <div class="relative">
                            <input id="email" type="email" class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-10 py-3 rounded-none @error('email') border border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 6.81c0-.566-.214-1.105-.598-1.512a2.053 2.053 0 00-1.414-.598H6.012c-.566 0-1.105.214-1.512.598A2.053 2.053 0 004 6.81V17.19c0 .566.214 1.105.598 1.512.407.384.946.598 1.512.598h11.976c.566 0 1.105-.214 1.512-.598.384-.407.598-.946.598-1.512V6.81zM20 8l-8 5-8-5"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mb-6 pb-4">
                            <a class="underline text-primary hover:text-primary-hover" href="{{ route('login') }}">
                                zurück zum Login
                            </a>
                        </div>
                        <div>
                            <button type="submit" class="bg-primary text-white py-2 px-4 rounded w-full border-primary border transition-shadow duration-300 shadow-md hover:shadow-lg hover:bg-primary-hover">
                                Passwort zurücksetzen
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    @error('email')
    <script type="text/javascript">
        Swal.fire({
            text: "{{ $message }}",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Alles klar!",
            customClass: {
                confirmButton: "swal-primary-button"
            }
        });
    </script>
    @enderror
@endpush
