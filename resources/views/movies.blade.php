<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

    </head>
    <body>
        <ul>
        @foreach($movies as $movie)
            <li> <p><a href='/movies/single-movie/{{$movie->id}}' > {{ $movie->title }} </a><p> 
                <p> {{ $movie->storyline }} </p>
            </li>
        @endforeach
        </ul>
    </body>
</html>
