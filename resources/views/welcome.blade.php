<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

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
