@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="relative h-80 bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
    <div class="text-center text-white">
        <h1 class="text-5xl font-bold mb-4">You've Been Logged Out</h1>
        <p class="text-xl text-gray-200">Thanks for using Game Field Leasing!</p>
    </div>
</div>

<!-- Logout Confirmation Section -->
<div class="max-w-md mx-auto px-6 py-16">
    <div class="bg-gray-900 rounded-lg p-8 border border-red-600 text-center">
        <div class="text-6xl mb-6">👋</div>
        
        <h2 class="text-3xl font-bold mb-4 text-red-500">Goodbye!</h2>
        
        <p class="text-gray-300 mb-8">
            You have been successfully logged out from your account. We hope to see you again soon!
        </p>

        <!-- Action Buttons -->
        <div class="space-y-3">
            <a href="/login" class="block w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded transition duration-200">
                Sign In Again
            </a>
            <a href="/" class="block w-full bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 rounded transition duration-200">
                Return to Home
            </a>
        </div>

        <!-- Additional Info -->
        <div class="mt-8 border-t border-gray-700 pt-6">
            <p class="text-gray-400 text-sm mb-3">Need to book a field?</p>
            <a href="/booking" class="text-red-500 hover:text-red-400 font-semibold transition">Browse Available Fields</a>
        </div>
    </div>
</div>

@endsection
