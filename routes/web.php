<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por login
Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class);

    Route::view('profile', 'profile')->name('profile');
});

require __DIR__.'/auth.php';
