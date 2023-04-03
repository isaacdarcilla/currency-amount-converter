## A simple package that converts currency.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/currency-amount-converter/currency-amount-converter.svg?style=flat-square)](https://packagist.org/packages/currency-amount-converter/currency-amount-converter)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/currency-amount-converter/currency-amount-converter/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/currency-amount-converter/currency-amount-converter/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/currency-amount-converter/currency-amount-converter/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/currency-amount-converter/currency-amount-converter/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/currency-amount-converter/currency-amount-converter.svg?style=flat-square)](https://packagist.org/packages/currency-amount-converter/currency-amount-converter)

### Installation

You can install the package via composer:

```bash
composer require currency-amount-converter/currency-amount-converter
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="currency-amount-converter-config"
```

This is the contents of the published config file:

```php
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

```

### Usage

```php
$converter = new Currency();
$converter->convert(100)->value(); // 59.05
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

### Credits

- [Isaac D. Arcilla](https://github.com/isaacdarcilla)

### License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
