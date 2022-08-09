<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ config('app.name') }}:: @yield('titulo') </title>
</head>

<body>
    <div class="logo">
        <img src="{{ asset('img/dio-logo.png
                                ') }}" alt="Digital" srcset="">
    </div>
    <div class="container">
        @yield('conteudo')
    </div>

    <footer>
        <p>Digital - 2022</p>
    </footer>
</body>

</html>
