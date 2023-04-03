<?php

namespace Currency\CurrencyConverter\Facades;

use Illuminate\Support\Facades\Facade;

class CurrencyConverter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Currency\CurrencyConverter\CurrencyConverter::class;
    }
}
