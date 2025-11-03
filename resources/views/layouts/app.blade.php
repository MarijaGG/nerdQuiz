<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
         
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
                    h1 {
                        
                    color: #2b6cb0;
                    text-shadow: 1px 1px 3px #aee;
                    font-size: 55px;
                }

              body {
            font-family: Arial, sans-serif;
            background: linear-gradient(180deg, #e1f8ffff, #80c0ff);
            background-attachment: fixed; /* Keeps the gradient stable when scrolling */
            color: #222;
        }

               a {
                    font-size: 30px;
                }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div>
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header>
                    <div>
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
