<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Foodpanda Clone') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @yield('content')
                {{ $slot ?? '' }}
            </main>

            <footer class="footer">
                <div class="footer-container">
                    <div class="footer-box">
                        <h2>NomNom Food</h2>
                        <p>Order your favorite food from top restaurants near you. Fast delivery, best deals & great taste.</p>
                    </div>

                    <div class="footer-box">
                        <h3>Quick Links</h3>
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('restaurants') }}">Restaurants</a>
                        <a href="{{ route('offers') }}">Deals</a>
                        <a href="{{ route('contact') }}">Contact</a>
                    </div>

                    <div class="footer-box">
                        <h3>Support</h3>
                        <a href="#">Help Center</a>
                        <a href="#">Terms</a>
                        <a href="#">Privacy Policy</a>
                    </div>

                    <div class="footer-box">
                        <h3>Contact</h3>
                        <p>📍 Karachi, Pakistan</p>
                        <p>📞 +92 300 0000000</p>
                        <p>📧 support@nomnomfood.com</p>
                    </div>
                </div>

                <div class="footer-bottom">
                    <p>© 2026 NomNom Food. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
