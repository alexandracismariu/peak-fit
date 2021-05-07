<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Peak Fit')</title>

        <link rel="icon" href="{{ asset('img/favicon.ico') }}">

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="bg-gray-100">
        <nav class="px-8 mb-16 py-2">
            @include('partials.menu')
        </nav>

        <div class="space-y-6">
            @yield('content')
        </div>
    </body>
</html>
