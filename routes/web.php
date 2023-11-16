<?php

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'Fiorella',
        'games' => [
            'Elden Ring',
            'Call of Duty',
            'Flyff',
            'Wow',
        ]
    ]);
});

// {friend} = Paramètre obligatoire
// {friend?} = Paramètre optionnel
Route::get('/fiorella/{friend?}', function(Request $request, $friend = null) {
    return view('presentation', [
        'age' => Carbon::parse('2019-12-31')->age,
        'friend' => ucfirst($friend),
        'color' => $request->color,
    ]);
});


Route::get('/a-propos', function() {
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
            
});

//$request->color = $_GET['color'] ?? null;