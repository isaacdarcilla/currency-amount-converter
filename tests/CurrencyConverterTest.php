<?php

use Currency\CurrencyConverter\Currency;

it('has same exchange rate link', function () {
    expect(config('currency-amount-converter.exchange_rate'))
        ->toBe('https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml');
});

it(
    'return a currency rate',
    function () {
        $currency = new Currency();
        $amount = $currency->convert(1)->value();

        expect($amount)->toBeFloat();
    }
);
