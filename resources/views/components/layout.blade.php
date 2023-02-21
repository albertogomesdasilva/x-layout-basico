<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layout - app</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-4">
        <h1>LAYOUT PRINCIPAL</h1>
         <button class="but"><a href="/">Index</a></button> <button class="but"><a href="/lista">Lista</a></button>

        <hr>

    {{ $slot }}

    </div>
</body>
</html>
