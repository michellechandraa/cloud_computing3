<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'index');
Route::view('/movie', 'show');
Route::view('/login','login');
Route::view('/register','register');