@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full min-h-screen flex flex-col justify-center items-center text-white bg-gradient-to-br from-black via-gray-900 to-gray-800">
        <div class="text-center w-full px-4 sm:px-6 max-w-5xl">
            <h1 class="text-6xl font-extrabold leading-tight mb-6 tracking-wide drop-shadow-lg">
                Welkom bij <span class="text-indigo-500">Mijn Portfolio</span>
            </h1>
            <p class="text-lg text-gray-300 mb-10 max-w-2xl mx-auto">
                ✨ Creatief. Functioneel. Toekomstgericht. Ontdek mijn projecten en vaardigheden in een unieke ervaring.
            </p>
            <a href="#projecten"
               class="bg-indigo-600 hover:bg-indigo-700 px-8 py-3 rounded-full shadow-lg text-white font-semibold tracking-wide transition-all duration-300">
                Bekijk mijn werk
            </a>
        </div>

        <!-- Animated ring -->
        <div class="absolute w-72 h-72 border-4 border-indigo-500 opacity-20 rounded-full animate-pulse-fast"></div>
    </section>
    <!-- Over Mij Section -->
    <section class="py-28 bg-white text-black">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Foto -->
            <div class="flex justify-center">
                <img src="{{ asset('images/pfp.jpg') }}"
                     alt="Profielfoto"
                     class="w-[300px] h-[300px] md:w-[400px] md:h-[400px] object-cover rounded-full shadow-2xl border-4 border-indigo-600" />
            </div>

            <!-- Tekst en CV -->
            <div>
                <h2 class="text-5xl font-extrabold mb-6 leading-tight tracking-tight">
                    👋 Over Mij
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    Mijn naam is <strong>Manasse Kramer</strong> een ambitieuze en gemotiveerd Junior Software Developer met een passie voor coderen en werken aan nieuwe talen.
                    <br><br>
                    Ik ontwerp en ontwikkel professionele, schaalbare weboplossingen met focus op performance, design en gebruiksvriendelijkheid. Denk aan Laravel backends, Livewire apps en Tailwind frontends en nog veel meer!
                </p>

                <a href="{{ asset('storage/cv.pdf') }}" target="_blank"
                   class="inline-block mt-4 px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-full transition duration-300 shadow-lg">
                    📄 Download mijn CV
                </a>
            </div>
        </div>
    </section>



    <!-- Projecten Section -->
    <section id="projecten" class="bg-gray-100 text-black py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold mb-14 text-center text-gray-900 tracking-tight">🚀 Mijn Projecten</h2>

            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Project 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:scale-[1.02] hover:shadow-2xl transition-all duration-300">
                    <img src="{{ asset('images/projects/horeca.png') }}" alt="Horeca App" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Laravel Horeca App</h3>
                        <p class="text-gray-600 mb-4">Reserverings- en eventbeheer app voor restaurants met adminpaneel.</p>
                        <a href="https://github.com/Manasse-max/Horca-Beheer-App" target="_blank"
                           class="text-indigo-600 hover:underline font-semibold">Bekijk project →</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:scale-[1.02] hover:shadow-2xl transition-all duration-300">
                    <img src="{{ asset('images/projects/bodykit.png') }}" alt="Bodykit Shop" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Bodykit Webshop</h3>
                        <p class="text-gray-600 mb-4">Strakke e-commerce shop gebouwd met Laravel, Tailwind & Livewire.</p>
                        <a href="https://github.com/Manasse-max/Bodykit-Webshop-E-Commerce" target="_blank"
                           class="text-indigo-600 hover:underline font-semibold">Bekijk project →</a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:scale-[1.02] hover:shadow-2xl transition-all duration-300">
                    <img src="{{ asset('images/projects/userapp.png') }}" alt="User App" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">User-Management-Systeem</h3>
                        <p class="text-gray-600 mb-4">Backend systeem in Laravel voor gebruikersbeheer.</p>
                        <a href="https://github.com/Manasse-max/Laravel-User-Management-app" target="_blank"
                           class="text-indigo-600 hover:underline font-semibold">Bekijk project →</a>
                    </div>
                </div>
            </div>



            <!-- Contactformulier -->
            <div class="mt-20 bg-white p-8 rounded-xl shadow-lg max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold mb-6 text-center">📬 Neem Contact Op</h3>
                <form method="POST" action="/contact" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium mb-1">Naam</label>
                        <input name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">Email</label>
                        <input name="email" type="email" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">Bericht</label>
                        <textarea name="message" required rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition">
                            Verstuur Bericht
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
