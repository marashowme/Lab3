<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('product.index');
});

// Маршрути для країн (з лабораторної)
Route::resource('country', CountryController::class);

// Маршрути для магазину техніки (ваше індивідуальне)
Route::resource('product', ProductController::class);
