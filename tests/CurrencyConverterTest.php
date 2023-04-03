<?php

it('it has same exchange rate link', function () {
    expect(config('currency-amount-converter.exchange_rate'))
        ->toBe('https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml');
});
