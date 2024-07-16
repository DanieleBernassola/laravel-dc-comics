<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifica fumetto</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1>Modifica fumetto: {{ $comics->title }}</h1>
        <a href="{{ route('comics.index') }}">Torna all'elenco</a>


        <form action="{{ route('comics.update', $comics->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nome fumetto</label>
                <input type="text" class="form-control" name="title" value="{{ old('title', $comics->title) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <input type="text" class="form-control" name="description"
                    value="{{ old('description', $comics->description) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" value="{{ old('thumb', $comics->thumb) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="number" class="form-control" name="price" value="{{ old('price', $comics->price) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" value="{{ old('series', $comics->series) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" value="{{ old('type', $comics->type) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="text" class="form-control" name="sale_date"
                    value="{{ old('sale_date', $comics->sale_date) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Autore</label>
                <input type="text" class="form-control" name="artists"
                    value="{{ old('artists', $comics->artists) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Scrittori</label>
                <input type="text" class="form-control" name="writers"
                    value="{{ old('writers', $comics->writers) }}">
            </div>
            <button class="btn btn-primary">Modifica fumetto</button>
        </form>
    </div>

</body>

</html>
