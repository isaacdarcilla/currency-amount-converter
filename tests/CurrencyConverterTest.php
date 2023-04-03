<?php

//use Currency\CurrencyConverter\Currency;
//use Currency\CurrencyConverter\Exceptions\CurrencyNotSupported;
//use Currency\CurrencyConverter\Exceptions\XmlUrlNotMatched;

it('it has same exchange rate link', function () {
    expect(config('currency-amount-converter.exchange_rate'))
        ->toBe('https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml');
});

//it(
///**
// * @throws XmlUrlNotMatched
// * @throws CurrencyNotSupported
// */ 'it return a currency rate',
//    function () {
//        $currency = new Currency();
//        dd($currency->convert(2)->value());
//    }
//);
