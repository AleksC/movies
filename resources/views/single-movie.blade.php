@extends('layouts.master')

@section('content')
    <p class="list-group-item list-group-item-action list-group-item-dark"> Title: {{ $movie->title }} </p> 
    <p class="list-group-item list-group-item-action list-group-item-dark"> Genre: {{ $movie->genre }} </p>
    <p class="list-group-item list-group-item-action list-group-item-dark"> Storyline: {{ $movie->storyline }} </p>
    <p class="list-group-item list-group-item-action list-group-item-dark"> Year: {{ $movie->year }} </p>
    <p class="list-group-item list-group-item-action list-group-item-dark"> Director: {{ $movie->director }} </p>
@endsection
