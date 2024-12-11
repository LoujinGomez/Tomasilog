<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FoodMenuController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', [FoodMenuController::class, 'showMenuInWelcomePage'])->name('welcome');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/menu', [FoodMenuController::class, 'showMenu'])->name('menu');

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/signup', [UserController::class, 'signup'])->name('signup');

Route::post('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect('/')->with('success', 'You have been logged out.');
})->name('logout');

// Authenticated routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 'isAdmin:admin'
])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin_menu', [PageController::class, 'admin_menu'])->name('admin_menu');
    Route::get('/userprofile', [PageController::class, 'userprofile'])->name('userprofile');

    // Food Menu Routes
    Route::get('/dashboard', [FoodMenuController::class, 'index'])->name('dashboard');
    Route::get('/create', [FoodMenuController::class, 'create'])->name('create');
    Route::post('/store', [FoodMenuController::class, 'store'])->name('store');
    Route::delete('/food-menu/{id}', [FoodMenuController::class, 'destroy'])->name('food_menu.destroy');
    Route::put('/food-menu/{id}', [FoodMenuController::class, 'update'])->name('food_menu.update');
    Route::get('/food-menu/trashed', [FoodMenuController::class, 'trashed'])->name('food_menu.trashed');
    Route::post('/food-menu/{id}/restore', [FoodMenuController::class, 'restore'])->name('food_menu.restore');
    Route::delete('/food-menu/{id}/force-delete', [FoodMenuController::class, 'forceDelete'])->name('food_menu.force_delete');
    Route::get('/trashed', [FoodMenuController::class, 'trashed'])->name('trashFoodMenu');
    

    
    
    
});
