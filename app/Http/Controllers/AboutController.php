<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AboutController extends Controller

{

    
    public $team = [
        [
            'name' => 'Fiorella',
            'job' => 'CEO',
            'image' => 'https://i.pravatar.cc/75?u=fiorella',
            ],
            [
            'name' => 'Toto',
            'job' => 'CTO',
            'image' => 'https://i.pravatar.cc/75?u=fiorella',
            ],
        ];


    public function about()
    {


        return view('about', [
        
            'title' => 'Webflix',
            'team' => $this->team,
               
            
            ]);
    }

    public function show($user)
        {
           $users = collect($this->team)->pluck('name')->all();
            if (! in_array($user, $users)) {
                abort(404); // Renvoie une 404
            }
            return view('about-show', [
                'user'=> $user,
            ]);
        }
        public function showMovie($movie)
        {
           $movies = collect($movie->title)->pluck('title')->all();
            if (! in_array($movie, $movies)) {
                abort(404); // Renvoie une 404
            }
            return view('about-movie', [
                'movie'=> Movie::all(),
            ]);
        }
    
}

