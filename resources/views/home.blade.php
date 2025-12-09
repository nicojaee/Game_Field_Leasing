@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="relative h-screen bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center overflow-hidden">
    <img src="{{ asset('images/fotoweb1.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-30">
    <div class="absolute inset-0 bg-black/40"></div>
    
    <div class="relative text-center text-white z-10 px-6">
        <h1 class="text-7xl font-bold mb-4">BOOK YOUR FAVORITE</h1>
        <h1 class="text-7xl font-bold text-red-200 mb-6">SPORTS PLACE NOW</h1>
        <p class="text-2xl text-gray-200 mb-8">Find and reserve premium sports fields in seconds</p>
        <div class="flex gap-4 justify-center">
            <a href="/booking" class="bg-red-600 hover:bg-red-700 text-white font-bold py-4 px-8 rounded-lg text-lg transition">
                Start Booking
            </a>
            <a href="/about" class="border-2 border-white text-white hover:bg-white hover:text-red-600 font-bold py-4 px-8 rounded-lg text-lg transition">
                Learn More
            </a>
        </div>
    </div>
</div>

<!-- ABOUT SECTION -->
<div class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <img src="{{ asset('images/facility.jpg') }}" class="w-full h-96 object-cover rounded-xl shadow-2xl">

        <div>
            <h2 class="text-4xl font-bold mb-6 text-red-500">About Game Field Leasing</h2>
            <p class="text-gray-300 text-lg leading-relaxed mb-4">
                Our mission is to provide safe, clean, and user-friendly sports fields for individuals and groups to enjoy. We ensure every customer has a satisfying experience every time they visit our facilities.
            </p>
            <p class="text-gray-300 text-lg leading-relaxed mb-6">
                With over 500+ fields across the city and trusted by 2000+ users, we're your go-to platform for hassle-free sports field reservations.
            </p>

            <a href="/booking" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg transition text-lg">
                Start Your First Booking
            </a>
        </div>
    </div>
</div>

<!-- HOW IT WORKS -->
<div class="bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">How It Works</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-black rounded-xl p-8 border border-red-600 text-center">
                <div class="text-5xl mb-4">🔍</div>
                <h3 class="font-bold text-xl mb-3">Find</h3>
                <p class="text-gray-400">Browse hundreds of available fields in your area</p>
            </div>
            <div class="bg-black rounded-xl p-8 border border-red-600 text-center">
                <div class="text-5xl mb-4">📅</div>
                <h3 class="font-bold text-xl mb-3">Choose</h3>
                <p class="text-gray-400">Select your preferred date and time slot</p>
            </div>
            <div class="bg-black rounded-xl p-8 border border-red-600 text-center">
                <div class="text-5xl mb-4">💳</div>
                <h3 class="font-bold text-xl mb-3">Pay</h3>
                <p class="text-gray-400">Secure payment with multiple options</p>
            </div>
            <div class="bg-black rounded-xl p-8 border border-red-600 text-center">
                <div class="text-5xl mb-4">🎮</div>
                <h3 class="font-bold text-xl mb-3">Play</h3>
                <p class="text-gray-400">Enjoy your reserved field with friends</p>
            </div>
        </div>
    </div>
</div>

<!-- FEATURED FIELDS -->
<div class="max-w-7xl mx-auto px-6 py-20">
    <h2 class="text-4xl font-bold mb-12 text-center">Featured Fields</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 hover:border-red-500 hover:shadow-2xl transition">
            <img src="{{ asset('images/football.jpg') }}" alt="Football" class="w-full h-40 object-cover">
            <div class="p-8">
                <h3 class="font-bold text-2xl mb-2">Premium Football</h3>
                <p class="text-gray-400 mb-4">Professional-grade field with night lighting</p>
                <div class="flex justify-between items-center">
                    <span class="text-red-500 font-bold text-lg">Rp 150.000/jam</span>
                    <a href="/booking" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded transition">Book</a>
                </div>
            </div>
        </div>

        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 hover:border-orange-500 hover:shadow-2xl transition">
            <img src="{{ asset('images/basketball.jpg') }}" alt="Basketball" class="w-full h-40 object-cover">
            <div class="p-8">
                <h3 class="font-bold text-2xl mb-2">Indoor Basketball</h3>
                <p class="text-gray-400 mb-4">Climate-controlled indoor court with pro hoops</p>
                <div class="flex justify-between items-center">
                    <span class="text-red-500 font-bold text-lg">Rp 100.000/jam</span>
                    <a href="/booking" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded transition">Book</a>
                </div>
            </div>
        </div>

        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 hover:border-yellow-500 hover:shadow-2xl transition">
            <img src="{{ asset('images/tennis.jpg') }}" alt="Tennis" class="w-full h-40 object-cover">
            <div class="p-8">
                <h3 class="font-bold text-2xl mb-2">Tennis Courts</h3>
                <p class="text-gray-400 mb-4">Clay & hardcourt options with pro equipment</p>
                <div class="flex justify-between items-center">
                    <span class="text-red-500 font-bold text-lg">Rp 80.000/jam</span>
                    <a href="/booking" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded transition">Book</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TESTIMONIALS -->
<div class="bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">What Our Users Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-black rounded-xl p-8 border border-gray-700">
                <div class="flex items-center gap-4 mb-4">
                    <div class="text-4xl">👤</div>
                    <div>
                        <h3 class="font-bold">Alex Johnson</h3>
                        <p class="text-red-500">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
                <p class="text-gray-300">"Game Field Leasing made booking a field so easy. I was able to reserve within minutes!"</p>
            </div>

            <div class="bg-black rounded-xl p-8 border border-gray-700">
                <div class="flex items-center gap-4 mb-4">
                    <div class="text-4xl">👩</div>
                    <div>
                        <h3 class="font-bold">Maria Garcia</h3>
                        <p class="text-red-500">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
                <p class="text-gray-300">"Best prices in town! The fields are always clean and well-maintained."</p>
            </div>

            <div class="bg-black rounded-xl p-8 border border-gray-700">
                <div class="flex items-center gap-4 mb-4">
                    <div class="text-4xl">🧑</div>
                    <div>
                        <h3 class="font-bold">David Chen</h3>
                        <p class="text-red-500">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
                <p class="text-gray-300">"Great customer service and reliable bookings. Highly recommended!"</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA SECTION -->
<div class="bg-gradient-to-r from-red-600 to-red-800 py-20">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-5xl font-bold mb-4 text-white">Ready to Play?</h2>
        <p class="text-xl text-gray-100 mb-8">Join thousands of sports enthusiasts and book your field today!</p>
        <a href="/booking" class="inline-block bg-black hover:bg-gray-900 text-red-500 font-bold py-4 px-10 rounded-lg text-lg transition">
            Book Your Field Now
        </a>
    </div>
</div>

@endsection
