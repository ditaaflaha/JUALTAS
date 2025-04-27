<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\DitaController;
use App\Http\Controllers\RamaController;

// Halaman statis
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', function () {
    return view('home');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/destinasi', function () {
    return view('destinasi');
});
Route::get('/welcome', function () {
    return view('welcome');
});

// Route controller
Route::get('/rama', [RamaController::class, 'tampilkan']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/list_product', [ListProductController::class, 'tampilkan']); 

// Prefix admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });

    Route::get('/tugaspublic', function () {
        return view('tugaspublic');
    });
    
    Route::get('/destinasi', [\App\Http\Controllers\DestinasiControllers::class, 'index'])->name('destinasi');
});
