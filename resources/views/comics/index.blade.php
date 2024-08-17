<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elenco fumetti </title>
    @vite('resources/js/app.js')
</head>

<body>
    <header class="d-flex justify-content-between">
        <img src="" alt="">
        <div class="text-uppercase">
            <h6>characters</h6>
        </div>
    </header>

    <main class="container-fluid text-white">
        <div class="container">

            <h1>Fumetti</h1>
            <a href="{{ route('comics.create') }}">Crea un fumetto</a>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <a href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
                        <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-secondary">Delete</button>
                        </form>
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></img>
                        <p class="text-uppercase">{{ $comic->series }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
