<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PresentationController extends Controller
{

public function friend(Request $request, $friend = null,)
{
    return view('presentation', [
        'age' => Carbon::parse('2019-12-31')->age,
        'friend' => ucfirst($friend),
        'color' => $request->color,
    ]);
    }
}
