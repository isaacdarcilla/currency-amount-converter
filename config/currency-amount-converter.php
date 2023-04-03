<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    |
    | This is the default currency to be converted into.
    | Default is PHP, you can pass also pass supported currency.
    |
    */
    'currency' => 'PHP',

    /*
    |--------------------------------------------------------------------------
    | Exchange Rate
    |--------------------------------------------------------------------------
    |
    | This is where we fetch the daily exchange rate.
    | Note: Do not modify this value.
    |
    */
    'exchange_rate' => 'https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml',

    /*
    |--------------------------------------------------------------------------
    | Supported Currency
    |--------------------------------------------------------------------------
    |
    | List of all the default supported currency.
    |
    */
    'supported_currency' => [
        'USD',
        'JPY',
        'BGN',
        'CZK',
        'DKK',
        'GBP',
        'HUF',
        'PLN',
        'RON',
        'SEK',
        'CHF',
        'ISK',
        'NOK',
        'TRY',
        'AUD',
        'BRL',
        'CAD',
        'CNY',
        'HKD',
        'IDR',
        'ILS',
        'INR',
        'KRW',
        'MXN',
        'MYR',
        'NZD',
        'PHP',
        'SGD',
        'THB',
        'ZAR',
    ],
];
