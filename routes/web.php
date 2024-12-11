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
    'verified', 'isAdmin:admin'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin_menu', [PageController::class, 'admin_menu'])->name('admin_menu');
    Route::get('/userprofile', [PageController::class, 'userprofile'])->name('userprofile');

});
