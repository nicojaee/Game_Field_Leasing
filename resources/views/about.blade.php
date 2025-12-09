@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="relative h-96 bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
    <div class="text-center text-white">
        <h1 class="text-6xl font-bold mb-4">About Game Field Leasing</h1>
        <p class="text-2xl text-gray-100">Your Trusted Sports Field Booking Platform</p>
    </div>
</div>

<!-- Mission Section -->
<div class="max-w-7xl mx-auto px-6 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
            <img src="{{ asset('images/facility.jpg') }}" alt="Mission" class="rounded-xl shadow-xl">
        </div>
        <div>
            <h2 class="text-4xl font-bold mb-6 text-red-500">Our Mission</h2>
            <p class="text-gray-300 text-lg leading-relaxed mb-4">
                We believe that access to quality sports facilities should be easy, affordable, and convenient for everyone. Our platform connects sports enthusiasts with premium fields across the city, making it simple to book and play.
            </p>
            <p class="text-gray-300 text-lg leading-relaxed mb-6">
                Founded in 2020, Game Field Leasing has grown to become the go-to platform for athletes, teams, and recreational players seeking reliable field reservations.
            </p>
            <div class="flex gap-4">
                <a href="/booking" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition">
                    Start Booking
                </a>
                <a href="/contact" class="border border-red-600 text-red-500 hover:bg-red-600 hover:text-white font-bold py-3 px-6 rounded-lg transition">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us -->
<div class="bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">Why Choose Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-black rounded-xl p-8 border border-red-600 text-center">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="font-bold text-xl mb-3">Quick Booking</h3>
                <p class="text-gray-400">Reserve your field in seconds with our streamlined booking process</p>
            </div>
            <div class="bg-black rounded-xl p-8 border border-red-600 text-center">
                <div class="text-4xl mb-4">💰</div>
                <h3 class="font-bold text-xl mb-3">Best Prices</h3>
                <p class="text-gray-400">Competitive rates with discounts for regular bookings</p>
            </div>
            <div class="bg-black rounded-xl p-8 border border-red-600 text-center">
                <div class="text-4xl mb-4">✨</div>
                <h3 class="font-bold text-xl mb-3">Quality Facilities</h3>
                <p class="text-gray-400">Well-maintained premium sports fields across the city</p>
            </div>
            <div class="bg-black rounded-xl p-8 border border-red-600 text-center">
                <div class="text-4xl mb-4">🤝</div>
                <h3 class="font-bold text-xl mb-3">24/7 Support</h3>
                <p class="text-gray-400">Dedicated customer support whenever you need help</p>
            </div>
        </div>
    </div>
</div>

<!-- Facilities Showcase -->
<div class="max-w-7xl mx-auto px-6 py-16">
    <!-- Football -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
        <div>
            <h3 class="text-3xl font-bold mb-4 text-red-500">⚽ Football Fields</h3>
            <p class="text-gray-300 text-lg leading-relaxed mb-4">
                Professional-grade football fields with perfectly maintained grass and professional lighting. Our fields meet international standards and are suitable for competitive matches, friendly games, and training sessions.
            </p>
            <ul class="text-gray-300 space-y-3">
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Professional-grade surface</li>
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Night lighting available</li>
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Changing rooms</li>
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Parking facilities</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('images/football.jpg') }}" alt="Football" class="rounded-xl shadow-xl">
        </div>
    </div>

    <!-- Basketball -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
        <div>
            <img src="{{ asset('images/basketball.jpg') }}" alt="Basketball" class="rounded-xl shadow-xl">
        </div>
        <div>
            <h3 class="text-3xl font-bold mb-4 text-red-500">🏀 Basketball Courts</h3>
            <p class="text-gray-300 text-lg leading-relaxed mb-4">
                Indoor and outdoor basketball courts equipped with professional hoops and court markings. Perfect for competitive leagues, casual games, or training programs. All courts feature quality flooring and equipment.
            </p>
            <ul class="text-gray-300 space-y-3">
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Indoor & outdoor options</li>
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Professional hoops</li>
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Spectator seating</li>
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Training equipment</li>
            </ul>
        </div>
    </div>

    <!-- Tennis -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
            <h3 class="text-3xl font-bold mb-4 text-red-500">🎾 Tennis Courts</h3>
            <p class="text-gray-300 text-lg leading-relaxed mb-4">
                World-class tennis courts with clay and hardcourt options. Our facilities cater to recreational players, serious competitors, and training academies. All courts meet professional standards and are regularly maintained.
            </p>
            <ul class="text-gray-300 space-y-3">
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Clay & hardcourt available</li>
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Professional nets</li>
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Ball machine rental</li>
                <li class="flex items-center gap-3"><span class="text-red-500">✓</span> Coaching available</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('images/tennis.jpg') }}" alt="Tennis" class="rounded-xl shadow-xl">
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-gradient-to-r from-red-600 to-red-800 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div>
                <h3 class="text-5xl font-bold text-white mb-2">500+</h3>
                <p class="text-red-100 text-lg">Available Fields</p>
            </div>
            <div>
                <h3 class="text-5xl font-bold text-white mb-2">2000+</h3>
                <p class="text-red-100 text-lg">Active Users</p>
            </div>
            <div>
                <h3 class="text-5xl font-bold text-white mb-2">15+</h3>
                <p class="text-red-100 text-lg">Sports Types</p>
            </div>
            <div>
                <h3 class="text-5xl font-bold text-white mb-2">98%</h3>
                <p class="text-red-100 text-lg">Satisfaction Rate</p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="max-w-7xl mx-auto px-6 py-16">
    <h2 class="text-4xl font-bold mb-12 text-center">Meet Our Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 text-center">
            <div class="bg-red-600 h-40 flex items-center justify-center text-5xl">👨‍💼</div>
            <div class="p-8">
                <h3 class="font-bold text-xl mb-2">Christian</h3>
                <p class="text-red-500 font-semibold mb-3">CEO & Founder</p>
                <p class="text-gray-400">Sports enthusiast with 15+ years industry experience</p>
            </div>
        </div>

        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 text-center">
            <div class="bg-red-600 h-40 flex items-center justify-center text-5xl">👩‍💼</div>
            <div class="p-8">
                <h3 class="font-bold text-xl mb-2">Nicholas</h3>
                <p class="text-red-500 font-semibold mb-3">Operations Manager</p>
                <p class="text-gray-400">Expert in facility management and customer service</p>
            </div>
        </div>

        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 text-center">
            <div class="bg-red-600 h-40 flex items-center justify-center text-5xl">👨‍💻</div>
            <div class="p-8">
                <h3 class="font-bold text-xl mb-2">Marco</h3>
                <p class="text-red-500 font-semibold mb-3">Tech Director</p>
                <p class="text-gray-400">Full-stack developer passionate about innovation</p>
            </div>
        </div>
    </div>
</div>

@endsection
