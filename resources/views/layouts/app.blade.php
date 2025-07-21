<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>




        .glass {
            backdrop-filter: blur(12px);
            background-color: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }
    </style>
</head>

<body class="relative text-gray-800">

<!-- Decorative Animated Hexagons -->



<div class="min-h-screen flex flex-col">
    <!-- ✅ Navigation -->
    <nav class="bg-black text-white px-6 py-4 flex justify-between items-center shadow-md w-full">
        <a href="/" class="text-2xl font-bold tracking-wide hover:opacity-80 transition">
            {{ config('app.name', 'Laravel') }}
        </a>

        <ul class="flex gap-8 font-medium text-sm">
            <li><a href="/" class="hover:text-indigo-300 transition">Home</a></li>
            <li><a href="#projecten" class="hover:text-indigo-300 transition">Portfolio</a></li>
            <li><a href="#contact" class="hover:text-indigo-300 transition">Contact</a></li>
        </ul>
    </nav>


    <!-- Page Header -->
    @hasSection('header')
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                @yield('header')
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="px-0 py-0 w-full">
        @yield('content')
    </main>
</div>
</body>
</html>
