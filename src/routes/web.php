<?php

use Currency\CurrencyConverter\Http\Controllers\CurrencyConverterController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/v1/currency-converter')->group(function () {
    Route::get('/', CurrencyConverterController::class)->name('currency.convert');
});
