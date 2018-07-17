<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store($id) 
    {
        $this->validate(request(), 
        [
        'comment' => 'required'
        ]);

        Comment::create([
            'content' => request('comment'),
            'movie_id' => $id,
        ]);

        return redirect('/movies/single-movie/' . $id);
    }
}
