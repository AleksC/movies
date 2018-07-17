@extends('layouts.master')

@section('content')

<ul class='list-group'>
    @foreach($movies as $movie)
        <li class='list-group-item list-group-item-action'> <p><a href='/movies/single-movie/{{$movie->id}}' > {{ $movie->title }} </a><p> 
            <p> {{ $movie->storyline }} </p>
        </li>
    @endforeach
</ul>
@endsection