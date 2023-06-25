<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <section>
        @section('navigation')

        @show
    </section>
    <section>
        @yield('content')
    </section>
</body>
</html>