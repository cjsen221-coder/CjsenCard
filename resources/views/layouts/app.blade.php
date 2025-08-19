<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CJSEN') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon_io/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <style>
        .neon-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .neon-text {
            font-size: 4rem;
            color: #fff;
            text-shadow: 0 0 5px #ff005e, 0 0 10px #ff005e, 0 0 20px #ff005e, 0 0 40px #ff005e, 0 0 80px #ff005e;
            animation: glow 1.5s infinite alternate;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 5px #ff005e, 0 0 10px #ff005e, 0 0 20px #ff005e, 0 0 40px #ff005e, 0 0 80px #ff005e;
            }

            100% {
                text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff, 0 0 40px #00d4ff, 0 0 80px #00d4ff, 0 0 160px #00d4ff;
            }
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100 h-screen overflow-hidden">
    <div class="flex flex-col h-full">
        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page Header -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="flex-grow overflow-y-auto px-4 mb-10">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-[#003366] text-white text-center py-3 text-sm">
            &copy; {{ date('Y') }} CJSENCARD. Tous droits réservés.
        </footer>
    </div>
</body>

</html>