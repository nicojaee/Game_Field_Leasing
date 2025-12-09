@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="relative h-80 bg-gradient-to-r from-red-600 to-red-800 flex items-center justify-center">
    <div class="text-center text-white">
        <h1 class="text-5xl font-bold mb-4">Welcome Back</h1>
        <p class="text-xl text-gray-200">Sign in to your Game Field Leasing account</p>
    </div>
</div>

<!-- Login Form Section -->
<div class="max-w-md mx-auto px-6 py-16">
    <div class="bg-gray-900 rounded-lg p-8 border border-red-600">
        <h2 class="text-3xl font-bold mb-8 text-red-500 text-center">Login</h2>
        
        <form class="space-y-6">
            <!-- Email -->
            <div>
                <label class="block text-gray-300 font-semibold mb-2">Email Address</label>
                <input type="email" class="w-full bg-black border border-gray-600 rounded px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="your@email.com" required>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-300 font-semibold mb-2">Password</label>
                <input type="password" class="w-full bg-black border border-gray-600 rounded px-4 py-3 text-white focus:border-red-500 focus:outline-none" placeholder="••••••••" required>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center gap-3">
                <input type="checkbox" id="remember" class="w-4 h-4">
                <label for="remember" class="text-gray-400">Remember me</label>
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded transition duration-200">
                Sign In
            </button>

            <!-- Forgot Password -->
            <div class="text-center">
                <a href="#" class="text-red-500 hover:text-red-400 transition">Forgot your password?</a>
            </div>
        </form>

        <!-- Sign Up Link -->
        <div class="border-t border-gray-700 mt-8 pt-6 text-center">
            <p class="text-gray-400 mb-3">Don't have an account?</p>
            <a href="#" class="text-red-500 hover:text-red-400 font-semibold transition">Create one here</a>
        </div>
    </div>
</div>

@endsection
