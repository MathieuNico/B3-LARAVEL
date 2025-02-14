<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoxeController;
use App\Http\Controllers\LocataireController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\TemplateContratController;
use App\Http\Controllers\BillController;

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
    Route::delete('/locataires/{id}', [LocataireController::class, 'destroy'])->name('locataires.destroy');
    Route::get('/locataires/{id}/edit', [LocataireController::class, 'edit'])->name('locataires.edit');
    Route::put('/locataires/{id}', [LocataireController::class, 'update'])->name('locataires.update');
    Route::get('/templatecontrats/create', [TemplateContratController::class, 'create'])->name('templatecontrats.create');
    Route::post('/templatecontrats/store', [TemplateContratController::class, 'store'])->name('templatecontrats.store');
    Route::get('/templatecontrats', [TemplateContratController::class, 'index'])->name('templatecontrats.index');
    Route::delete('/templatecontrats/{id}', [TemplateContratController::class, 'destroy'])->name('templatecontrats.destroy');
    Route::get('/templatecontrats/{id}/edit', [TemplateContratController::class, 'edit'])->name('templatecontrats.edit');
    Route::put('/templatecontrats/{id}', [TemplateContratController::class, 'update'])->name('templatecontrats.update');
    Route::get('/contrats/create', [ContratController::class, 'create'])->name('contrats.create');
    Route::post('/contrats/store', [ContratController::class, 'store'])->name('contrats.store');
    Route::get('/contrats', [ContratController::class, 'index'])->name('contrats.index');
    Route::delete('/contrats/{id}', [ContratController::class, 'destroy'])->name('contrats.destroy');
    Route::get('/contrats/{id}/edit', [ContratController::class, 'edit'])->name('contrats.edit');
    Route::put('/contrats/{id}', [ContratController::class, 'update'])->name('contrats.update');
    Route::get('/contrats/{id}/show', [ContratController::class, 'show'])->name('contrats.show');
    Route::get('/bills/create', [BillController::class, 'create'])->name('bills.create');
    Route::post('/bills/store', [BillController::class, 'store'])->name('bills.store');
    Route::get('/bills', [BillController::class, 'index'])->name('bills.index');
    Route::delete('/bills/{id}', [BillController::class, 'destroy'])->name('bills.destroy');
    Route::get('/bills/{id}/edit', [BillController::class, 'edit'])->name('bills.edit');
    Route::put('/bills/{id}', [BillController::class, 'update'])->name('bills.update');
    Route::get('/bills/{id}/show', [BillController::class, 'show'])->name('bills.show');
});


require __DIR__.'/auth.php';
