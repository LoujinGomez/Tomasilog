<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Middleware\Admin;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Route::get('/', [PageController::class,'welcome'])->name('home');
Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/menu', [PageController::class,'menu'])->name('menu');

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/signup', [UserController::class, 'signup'])->name('signup');

Route::post('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect('/')->with('success', 'You have been logged out.');
})->name('logout');







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
