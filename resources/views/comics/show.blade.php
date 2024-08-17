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
    <div class="container">
        <div class="row description">
            <div class="col">
                <p class="text-uppercase">{{ $comics->series }}</p>
                <p>Titolo: {{ $comics->title }}</p>
                <p>Descrizione: {{ $comics->description }}</p>
                <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}"></img>
                <p>Prezzo: {{ $comics->price }}</p>
                <p>Data uscita: {{ $comics->sale_date }}</p>
                <p>Tipo: {{ $comics->type }}</p>
                <p>Artista: {{ $comics->artists }}</p>
                <p>Scrittore: {{ $comics->writers }}</p>
                <a href="{{ route('comics.index') }}">Torna all'elenco</a>
                <a href="{{ route('comics.edit', $comics->id) }}">Modifica</a>
            </div>
        </div>
    </div>
</body>

</html>
