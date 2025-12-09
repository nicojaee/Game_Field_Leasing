@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="relative h-96 bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
    <div class="text-center text-white">
        <h1 class="text-6xl font-bold mb-4">Book Your Field</h1>
        <p class="text-2xl text-gray-100">Quick & Easy Reservation</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-6 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="bg-gray-900 rounded-xl p-10 border border-red-600 shadow-2xl">
                <h2 class="text-3xl font-bold mb-8 text-red-500">Reserve Your Field</h2>
                <form class="space-y-6">
                    <div>
                        <label class="block text-gray-300 font-semibold mb-3">Select Field</label>
                        <select class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none">
                            <option>Football Field - Rp 150.000/jam</option>
                            <option>Basketball Court - Rp 100.000/jam</option>
                            <option>Tennis Court - Rp 80.000/jam</option>
                            <option>Multipurpose - Rp 120.000/jam</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Date</label>
                            <input type="date" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Duration</label>
                            <input type="number" min="1" max="8" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="1">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Start Time</label>
                            <input type="time" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">End Time</label>
                            <input type="time" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" disabled>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Name</label>
                            <input type="text" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Email</label>
                            <input type="email" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="john@example.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Phone</label>
                            <input type="tel" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="+1 (555) 000-0000">
                        </div>
                        <div>
                            <label class="block text-gray-300 font-semibold mb-3">Players</label>
                            <input type="number" min="1" max="100" class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="11">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-300 font-semibold mb-3">Special Requests</label>
                        <textarea class="w-full bg-black border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-red-500 focus:outline-none" rows="4" placeholder="Any requirements..."></textarea>
                    </div>

                    <div class="flex items-center gap-3">
                        <input type="checkbox" id="terms" class="w-5 h-5">
                        <label for="terms" class="text-gray-400">I agree to the terms</label>
                    </div>

                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-4 rounded-lg transition text-lg">
                        Reserve Field
                    </button>
                </form>
            </div>
        </div>

        <div>
            <div class="bg-gray-900 rounded-xl p-8 border border-gray-700 sticky top-6 shadow-xl">
                <h3 class="text-2xl font-bold mb-6 text-red-500">Summary</h3>
                <div class="space-y-4 border-b border-gray-700 pb-6 mb-6">
                    <div class="flex justify-between">
                        <span class="text-gray-400">Field</span>
                        <span class="font-semibold">TBD</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">Date</span>
                        <span class="font-semibold">TBD</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">Time</span>
                        <span class="font-semibold">TBD</span>
                    </div>
                </div>
                <div class="flex justify-between text-lg font-bold text-red-500 border-t border-gray-700 pt-3">
                    <span>Total</span>
                    <span>Rp 0</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Available Fields -->
<div class="bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold mb-12 text-center">Available Fields</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-black rounded-xl overflow-hidden border border-gray-700 hover:border-red-500 hover:shadow-xl transition">
                <div class="bg-red-600 h-32 flex items-center justify-center text-4xl">⚽</div>
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-2">Football</h3>
                    <p class="text-gray-400 text-sm mb-4">Professional field</p>
                    <p class="text-red-500 font-semibold">Rp 150.000/jam</p>
                </div>
            </div>

            <div class="bg-black rounded-xl overflow-hidden border border-gray-700 hover:border-orange-500 hover:shadow-xl transition">
                <div class="bg-orange-600 h-32 flex items-center justify-center text-4xl">🏀</div>
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-2">Basketball</h3>
                    <p class="text-gray-400 text-sm mb-4">Indoor/Outdoor</p>
                    <p class="text-red-500 font-semibold">Rp 100.000/jam</p>
                </div>
            </div>

            <div class="bg-black rounded-xl overflow-hidden border border-gray-700 hover:border-yellow-500 hover:shadow-xl transition">
                <div class="bg-yellow-600 h-32 flex items-center justify-center text-4xl">🎾</div>
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-2">Tennis</h3>
                    <p class="text-gray-400 text-sm mb-4">Clay & hardcourt</p>
                    <p class="text-red-500 font-semibold">Rp 80.000/jam</p>
                </div>
            </div>

            <div class="bg-black rounded-xl overflow-hidden border border-gray-700 hover:border-green-500 hover:shadow-xl transition">
                <div class="bg-green-600 h-32 flex items-center justify-center text-4xl">🏐</div>
                <div class="p-6">
                    <h3 class="font-bold text-lg mb-2">Multipurpose</h3>
                    <p class="text-gray-400 text-sm mb-4">Volleyball</p>
                    <p class="text-red-500 font-semibold">Rp 120.000/jam</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
