<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>

      {{-- Includiamo gli assets con la direttiva @vite --}}
     @vite('resources/js/app.js')
</head>
<body>

    {{-- HEADER --}}
    <header>
        @include('partials._navbar')
    </header>

    {{-- MAIN --}}
    <main class="my-auto">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials._footer')

</body>
</html>