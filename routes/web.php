<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('citas', CitaController::class);

Route::get('/citas/horas/{dia}', [CitaController::class, 'horas'])->name('citas.horas');
Route::get('/citas/horas/{dia}/{hora}', [CitaController::class, 'confirmacion'])->name('citas.confirmacion');

require __DIR__.'/auth.php';
