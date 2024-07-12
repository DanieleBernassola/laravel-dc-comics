<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dettaglio fumetti </title>
</head>

<body>
    <h1>{{ $comics->title }}</h1>
    <p>{{ $comics->description }}</p>
    <a href="{{ route('comics.index') }}">Torna all'elenco</a>
</body>

</html>
