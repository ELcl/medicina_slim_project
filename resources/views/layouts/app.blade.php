<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- Oficial UI Component --}}
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        {{-- Include Flowbite for tailwind components --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
            {{-- Graphics library --}}
            {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
        {{-- Include Chart JS --}}
        {{-- <script src="
        https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js
        "></script> --}}
        {{-- Google Fonts --}}
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,0" /> --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css">  

        {{-- @yield('css') --}}

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                        {{-- Notificaciones --}}
                            {{-- Confirmado --}}
                        @if (session('status'))
                        <div id="yes" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                            <h1 class="font-bold">¡Éxito!</h1>
                            <p>{{ session('status') }}</p>
                        </div>
                        <script>
                            setTimeout(function() {
                                document.getElementById('yes').style.display = 'none';
                            }, 5000);
                        </script>
                        @endif


                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}  
            </main>
        </div>
         
    </body>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    @yield('js')
</html>
