<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Field Leasing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">

    {{-- Navbar --}}
    <header>
        <nav class="flex justify-between items-center p-6">
            <h1 class="text-xl font-bold">🏟️ Game Field Leasing</h1>
            <ul class="flex gap-6">
                <li><a href="/" class="hover:text-red-500">Home</a></li>
                <li><a href="/about" class="hover:text-red-500">About</a></li>
                <li><a href="/booking" class="hover:text-red-500">Booking</a></li>
                <li><a href="/contact" class="hover:text-red-500">Contact</a></li>
                <li><a href="/login" class="hover:text-red-500">Login</a></li>
                <li><a href="/logout" class="hover:text-red-500">Logout</a></li>
            </ul>
        </nav>
    </header>

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

</body>
</html>
