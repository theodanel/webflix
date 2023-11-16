<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller

{

    
    public function about()
    {
        return view('about', [
        
            'title' => 'Webflix',
            'team' => [
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
            ]
            ]);
    }

    public function show($user)
        {

            if (! in_array($user, ['Fiorella', 'Toto'])) {
                abort(404); // Renvoie une 404
            }
            return view('about-show', [
                'user'=> $user,
            ]);
        }
    
}

