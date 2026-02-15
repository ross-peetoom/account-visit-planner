<?php

use App\Http\Controllers\Plans\PlanController;
use App\Http\Controllers\Settings\SugarSettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('plans.index');
    }

    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::get('/settings/sugar', [SugarSettingsController::class, 'show'])->name('settings.sugar');
});

require __DIR__.'/auth.php';
