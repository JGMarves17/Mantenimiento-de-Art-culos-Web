<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Livewire\Actions\Logout;

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

    Route::post('logout', function (Logout $logout) {
        $logout();
        return redirect('/');
    })->name('logout');
});

require __DIR__.'/auth.php';