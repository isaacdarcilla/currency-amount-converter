<?php

namespace Currency\CurrencyConverter\Facades;

use Currency\CurrencyConverter\Currency;
use Illuminate\Support\Facades\Facade;

class CurrencyConverter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Currency::class;
    }
}
