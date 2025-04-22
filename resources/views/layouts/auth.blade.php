<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Scripts -->
</head>
<body class="antialiased font-base">
    @stack('css')
    <div class="flex h-screen">
        <div class="w-full lg:w-1/2 h-full">
            <div class="login_side_img bg-cover bg-center w-full h-full" style="background-image: url('{{ asset('images/login_side_img.png') }}');"></div>
        </div>
        <div class="w-full lg:w-1/2 bg-white py-5 pl-12 pt-12 flex flex-col justify-start">
            @include("partials/logo", ["classes" => "pl-5"])
            <div class="flex justify-center items-center p-3 mt-auto mb-auto">
                <div class="flex justify-center items-center p-3 mt-auto mb-auto">
                    <div class="w-[376px] mx-auto">
                        @yield('content')
                    </div>
                </div>
            </div>
            <div class="flex justify-between py-3 px-5">
                <span>&copy; ProducersCrowd 2024</span>
                <span><i class="fa fa-envelope"></i> contact@producerscrowd.com</span>
            </div>
        </div>
    </div>
</body>

@stack('js')
</html>
