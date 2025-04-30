<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/', 'index');
Route::get('/', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);
// Route::view('/movie', 'show');
Route::view('/login','login');
Route::view('/register','register');

Route::get('/movies50', [MoviesController::class, 'getMovies50Json']);