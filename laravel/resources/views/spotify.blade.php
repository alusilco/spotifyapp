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
                                <th class="bottom_line">#</th>
                                <th class="bottom_line">Título</th>
                                <th class="bottom_line"></th>
                                <th class="bottom_line">Álbum</th>
                                <th class="bottom_line">Fecha en la que se añadió<img class="arrow" src="{{ asset('images/arrow.svg') }}" alt="arrow"></th>
                                <th class="bottom_line"><img class="clock" src="{{ asset('images/time.png') }}" alt="Clock image"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($songs as $song)
                                <tr>
                                    <td>{{ $song->id }}</td>
                                    <td><img src="{{ $song->image_path }}" alt="Album image"></td>
                                    <td class="song-info">
                                        <p class="song-title">{{ $song->titulo }}</p>
                                        <p class="song-artist">{{ $song->artist }}</p>
                                    </td>
                                    <td>{{ $song->album }}</td>
                                    <td class="greenheart"><img src="{{ asset('images/greenheart.png') }}" alt="green heart"></td>
                                    <td>{{ $song->duration }}</td>
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
