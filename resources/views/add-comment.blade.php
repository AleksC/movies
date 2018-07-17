<form action={{ route('create-comment', ['id' => $movie->id]) }}  method="POST">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="genre">Add comment:</label>
      <input type="text" name='comment' class="form-control" id="comment">
      @include('partials.error-message', ['fieldName' => 'comment'])
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>