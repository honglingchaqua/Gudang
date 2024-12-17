<!DOCTYPE html>  
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">  
<head>  
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="csrf-token" content="{{ csrf_token() }}">  

    <title>{{ config('app.name', 'Laravel App') }}</title>  

    <!-- Fonts -->  
    <link rel="preconnect" href="https://fonts.bunny.net">  
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />  

    <!-- Vite -->  
    @vite(['resources/css/app.css', 'resources/js/app.js'])  

    <!-- Tailwind CSS (Optional, since Vite handles Tailwind) -->  
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->  

    <!-- Custom Styles -->  
    @yield('styles')  
</head>  
<body class="bg-gray-100 font-sans antialiased">  
    <!-- Navbar -->  
    @include('components.components.navbar')  

    <!-- Main Content -->  
    <div class="container mx-auto px-4 py-8">  
        @yield('content')  
    </div>  

    <!-- Footer -->  
    <footer class="bg-white text-center py-4 mt-8">  
        <div class="container mx-auto">  
            &copy; {{ date('Y') }} Made Hongliong.  
        </div>  
    </footer>  

    <!-- Scripts -->  
    @yield('scripts')  
</body>  
</html>