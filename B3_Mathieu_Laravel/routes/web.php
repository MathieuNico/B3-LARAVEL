<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoxeController;
use App\Http\Controllers\LocataireController;

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
    Route::get('/boxes', [BoxeController::class, 'index'])->name('boxes.index');
    Route::get('/boxes/create', [BoxeController::class, 'create'])->name('boxes.create');
    Route::post('/boxes', [BoxeController::class, 'store'])->name('boxes.store');
    Route::delete('/boxes/{id}', [BoxeController::class, 'destroy'])->name('boxes.destroy');
    Route::get('/boxes/{id}/edit', [BoxeController::class, 'edit'])->name('boxes.edit');
    Route::put('/boxes/{id}', [BoxeController::class, 'update'])->name('boxes.update');
    Route::get('/locataires', [LocataireController::class, 'index'])->name('locataires.index');
    Route::get('/locataires/create', [LocataireController::class, 'create'])->name('locataires.create');
    Route::post('/locataires/store', [LocataireController::class, 'store'])->name('locataires.store');
});

require __DIR__.'/auth.php';
