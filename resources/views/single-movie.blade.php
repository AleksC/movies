<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

    </head>
    <body>
        
        <p> {{ $movie->title }} <p> 
        <p> {{ $movie->genre }} </p>
        <p> {{ $movie->storyline }} </p>
        <p> {{ $movie->year }} </p>
        <p> {{ $movie->director }} </p>
            
    </body>
</html>
