<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
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

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/creer', [CategoryController::class, 'create']); // Afficher le formulaire
Route::post('/categories/creer', [CategoryController::class, 'store']);// Traiter le formulaire

Route::get('/movies/index', [MovieController::class, 'index']);


Route::get('/movies/{id}', [MovieController::class, 'showMovie']);

//$request->color = $_GET['color'] ?? null;