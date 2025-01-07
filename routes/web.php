<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\PenimbanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/menu', function () {
        return view('profile');
    });
    Route::resource('tabungan', TabunganController::class);
    Route::resource('penimbangan', PenimbanganController::class);
});

Route::get('/sampah', function () {
    return view('sampah');
});




require __DIR__.'/auth.php';
