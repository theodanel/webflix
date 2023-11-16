<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
            return view('home', [
                'name' => 'Fiorella',
                'games' => [
                    'Elden Ring',
                    'Call of Duty',
                    'Flyff',
                    'Wow',
                ]
            ]);
    }
}
