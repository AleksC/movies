<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
   
    </head>
    <body>
        <nav class='navbar navbar-expand-sm bg-light justify-content-center'>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/movies">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/movies/add-movie">Add Movie</a>
                </li>
            </ul>
        </nav>
        <div class='container'>
        @yield('content')
        </div><!--container-end-->
    </body>
</html>