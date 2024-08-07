<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creazione fumetto</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1>Aggiungi fumetto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome fumetto</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb">
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type">
            </div>
            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="text" class="form-control" name="sale_date">
            </div>
            <div class="mb-3">
                <label class="form-label">Autore</label>
                <input type="text" class="form-control" name="artists">
            </div>
            <div class="mb-3">
                <label class="form-label">Scrittori</label>
                <input type="text" class="form-control" name="writers">
            </div>
            <button class="btn btn-primary">Crea fumetto</button>
        </form>
    </div>

</body>

</html>
