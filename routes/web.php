<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Public\WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/terms', [\App\Http\Controllers\Public\TermsController::class, 'index'])->name('terms.index');
Route::get('/strategies', [\App\Http\Controllers\Public\StrategyController::class, 'index'])->name('strategies.index');
Route::get('/strategies/{slug}', [\App\Http\Controllers\Public\StrategyController::class, 'show'])->name('strategies.show');
