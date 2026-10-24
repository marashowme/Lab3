<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('product.index');
});

// Маршрути для країн (з лабораторної)
Route::resource('country', CountryController::class);

// Маршрути для магазину техніки (ваше індивідуальне)
Route::resource('product', ProductController::class);

// Маршрути статистики відвідувань
Route::get('/stats', [StatsController::class, 'pages'])->name('stats.pages');
Route::get('/stats/detail', [StatsController::class, 'detail'])->name('stats.detail');
