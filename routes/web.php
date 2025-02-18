<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoxeController;
use App\Http\Controllers\LocataireController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\TemplateContratController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\TaxController;

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

    // Boxes
    Route::get('/boxes', [BoxeController::class, 'index'])->name('boxes.index');
    Route::get('/boxes/create', [BoxeController::class, 'create'])->name('boxes.create');
    Route::get('/boxes/{id}/edit', [BoxeController::class, 'edit'])->name('boxes.edit');
    Route::post('/boxes', [BoxeController::class, 'store'])->name('boxes.store');
    Route::put('/boxes/{id}', [BoxeController::class, 'update'])->name('boxes.update');
    Route::delete('/boxes/{id}', [BoxeController::class, 'destroy'])->name('boxes.destroy');

    // Locataires
    Route::get('/locataires', [LocataireController::class, 'index'])->name('locataires.index');
    Route::get('/locataires/create', [LocataireController::class, 'create'])->name('locataires.create');
    Route::get('/locataires/{id}/edit', [LocataireController::class, 'edit'])->name('locataires.edit');
    Route::post('/locataires/store', [LocataireController::class, 'store'])->name('locataires.store');
    Route::put('/locataires/{id}', [LocataireController::class, 'update'])->name('locataires.update');
    Route::delete('/locataires/{id}', [LocataireController::class, 'destroy'])->name('locataires.destroy');

    // Template Contrats
    Route::get('/templatecontrats/create', [TemplateContratController::class, 'create'])->name('templatecontrats.create');
    Route::get('/templatecontrats', [TemplateContratController::class, 'index'])->name('templatecontrats.index');
    Route::get('/templatecontrats/{id}/edit', [TemplateContratController::class, 'edit'])->name('templatecontrats.edit');
    Route::get('/templatecontrats/{id}/show', [TemplateContratController::class, 'show'])->name('templatecontrats.show');
    Route::post('/templatecontrats/store', [TemplateContratController::class, 'store'])->name('templatecontrats.store');
    Route::put('/templatecontrats/{id}', [TemplateContratController::class, 'update'])->name('templatecontrats.update');
    Route::delete('/templatecontrats/{id}', [TemplateContratController::class, 'destroy'])->name('templatecontrats.destroy');

    // Contrats
    Route::get('/contrats/create', [ContratController::class, 'create'])->name('contrats.create');
    Route::get('/contrats', [ContratController::class, 'index'])->name('contrats.index');
    Route::get('/contrats/{id}/edit', [ContratController::class, 'edit'])->name('contrats.edit');
    Route::get('/contrats/{id}/show', [ContratController::class, 'show'])->name('contrats.show');
    Route::get('/contrats/{id}/export', [ContratController::class, 'export'])->name('contrats.export.pdf');
    Route::post('/contrats/store', [ContratController::class, 'store'])->name('contrats.store');
    Route::put('/contrats/{id}', [ContratController::class, 'update'])->name('contrats.update');
    Route::delete('/contrats/{id}', [ContratController::class, 'destroy'])->name('contrats.destroy');

    // Facture
    Route::get('/bills/create', [BillController::class, 'create'])->name('bills.create');
    Route::get('/bills', [BillController::class, 'index'])->name('bills.index');
    Route::get('/bills/{id}/edit', [BillController::class, 'edit'])->name('bills.edit');
    Route::get('/bills/{id}/show', [BillController::class, 'show'])->name('bills.show');
    Route::post('/bills/store', [BillController::class, 'store'])->name('bills.store');
    Route::put('/bills/{id}', [BillController::class, 'update'])->name('bills.update');
    Route::delete('/bills/{id}', [BillController::class, 'destroy'])->name('bills.destroy');
    Route::get('/bills/historique', [BillController::class, 'historique'])->name('bills.historique');

    // Impots
    Route::get('/tax/index',[TaxController::class,'index'])->name('tax.index');
    Route::get('tax/calculate',[TaxController::class, 'calculate'])->name('tax.calculate');
});








require __DIR__.'/auth.php';
