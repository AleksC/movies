@extends('layouts.master')

@section('content')
<form action="/movies" method="POST">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Title:</label>
      <input type="text" class="form-control" id="title" name='title'>
      @include('partials.error-message', ['fieldName' => 'title'])
    </div>
    <div class="form-group">
      <label for="genre">Genre:</label>
      <input type="text" name='genre' class="form-control" id="genre">
      @include('partials.error-message', ['fieldName' => 'genre'])
    </div>
    <div class="form-group">
      <label for="director">Director:</label>
      <input type="text" name='director' class="form-control" id="director">
    </div>
    <div class="form-group">
      <label for="genre">Year:</label>
      <input type="number" name='year' class="form-control" id="year">
      @include('partials.error-message', ['fieldName' => 'year'])
    </div>
    <div class="form-group">
            <label for="storyline">Storyline:</label>
            <input type="text" name='storyline' class="form-control" id="storyline">
            @include('partials.error-message', ['fieldName' => 'storyline'])
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection