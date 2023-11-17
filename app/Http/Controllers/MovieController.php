<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index ()
    {
        return view('movies/index', [
        'movies' => Movie::all(),
            
        ]);
    }
        

        public function showMovie(Request $request, $id = null)
{
    $movies = collect(Movie::all())->pluck('id')->all();
    if (! in_array($id, $movies)) {
        abort(404); // Renvoie une 404
    }
    return view('movies/about-movie', [
        'movie' => $id,
        'movies' => $movies,
         
        ]);
    }

}
