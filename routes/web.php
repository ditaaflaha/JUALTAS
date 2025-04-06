<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\DitaController;

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', function () {
    return view('home');
});
