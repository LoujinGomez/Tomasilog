<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class,'welcome'])->name('welcome');
Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/menu', [PageController::class,'menu'])->name('menu');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
