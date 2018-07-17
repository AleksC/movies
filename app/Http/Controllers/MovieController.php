<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();
        return view('layouts.movies', compact('movies'));
    }

    public function show($id) 
    {
        $movie = Movie::findOrFail($id);
        return view('single-movie', compact('movie'));
    }

    public function add()
    {
        return view('layouts.add-movie');
    }

    public function store()
    {
        $this->validate(request(), 
        ['title' => 'required', 
        'genre' => 'required', 
        'year' => 'required|after:1900|before:2018', 
        'storyline' => 'required|max:1000'
        ]);

        Movie::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'director' => request('director'),
            'year' => request('year'),
            'storyline'=> request('storyline')
        ]);

        return redirect('/movies');
    }
}
