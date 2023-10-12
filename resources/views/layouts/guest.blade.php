<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>SLIM - UMSA - MEDICINA</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
</head>
        
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="mx-auto pt-6">
                <a href="/">
                    <img class="fill-current block w-80" src="{{ asset('img/slim.jpeg') }}" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
            <div class= "flex flex-row m-6 pt-5">
                    <div class="mx-8">
                        <img class="fill-current block h-20 rounded-full" src="{{ asset('img/umsa.jpeg')}}" />
                    </div>
                    <div class="mx-8">
                        <img class="fill-current block  h-20 rounded-md" src="{{ asset('img/dipgis.jpeg')}}" />    
                    </div>
                    <div class="mx-8">
                        <img class="fill-current block  h-20 rounded-md" src="{{ asset('img/medicina.jpeg')}}" />    
                    </div>          
            </div>
        </div>
    </body>
</html>
