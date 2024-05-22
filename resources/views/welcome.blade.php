<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        <title>Laravel</title>

    </head>
    <body>
        <h1>teste</h1>

        @if (10 > 5)
            <p>A condição é true</p>
        @endif
        @if ($nome == 'Vinicius')
            <p>que nome bonito</p>
        @endif
        <p>{{$nome}}</p>

    </body>
</html>
