<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dettaglio fumetti </title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>{{ $comics->title }}</h1>
    <p>{{ $comics->description }}</p>
    <a href="{{ route('comics.index') }}">Torna all'elenco</a>
    <a href="{{ route('comics.edit', $comics->id) }}">Modifica</a>
</body>

</html>
