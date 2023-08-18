<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="{{ asset('css/spotify.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="square">
                <img src="{{ asset('images/whiteheart.png') }}" alt="white heart">
            </div>
            <div class="text">
                <h6>Lista</h6>
                <p>Canciones que te gustan</p>
                <h6>agalarza-ec.677canciones</h6>
            </div>
        </div>
    </header>
    <main>
        <div class="second-container">
            <img class="play-icon" src="{{ asset('images/greenplay.png') }}" alt="Play Icon">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>artist</th>
                                <th>Álbum</th>
                                <th>Fecha en la que se añadió<img class="arrow" src="{{ asset('images/arrow.svg') }}" alt="arrow"></th>
                                <th></th>
                                <th><img class="clock" src="{{ asset('images/time.png') }}" alt="music duration"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($songs as $song)
                                <tr>
                                    <td>{{ $song->id }}</td>
                                    <td><a target="_blank">{{ $song->name}}</a></td>
                                    <td>{{ $song->titulo }}</td>
                                    <td>{{ $song->artista}}</td>
                                    <td>{{ $song->album }}</td>
                                    <td>{{ $song->añadida }}<img class="green-heart" src="{{ asset('images/arro.svg') }}" alt="grren heart"</td>
                                    <td>{{ $song->created_at }}</td>
                                    <td><img src="{{ asset('images/greenheart.png') }}" alt="Favorite Icon"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
