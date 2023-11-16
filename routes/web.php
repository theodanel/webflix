<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresentationController;

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

Route::get('/', [HomeController::class, 'index']);
  

// {friend} = Paramètre obligatoire
// {friend?} = Paramètre optionnel
Route::get('/fiorella/{friend?}', [PresentationController::class,  'friend']);

Route::get('/a-propos', [AboutController::class, 'about']);
 


Route::get('/a-propos/{user}', [AboutController::class, 'show']);


//$request->color = $_GET['color'] ?? null;