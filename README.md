## A simple package that converts EURO to other currency.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/currency-amount-converter/currency-amount-converter.svg?style=flat-square)](https://packagist.org/packages/currency-amount-converter/currency-amount-converter)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/isaacdarcilla/currency-amount-converter/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/isaacdarcilla/currency-amount-converter/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/currency-amount-converter/currency-amount-converter.svg?style=flat-square)](https://packagist.org/packages/currency-amount-converter/currency-amount-converter)

#### Installation

You can install the package via composer:

```bash
composer require currency-amount-converter/currency-amount-converter
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="currency-amount-converter-config"
```

#### Usage

You can use method chaining:

```php
use Currency\CurrencyConverter\Currency;

$currency = new Currency();
$currency->convert(1)->value(); // 59.05

$currency = new Currency();
$currency->convert(1, 'PHP')->value(); // 59.05

$currency = new Currency();
$currency->convert(1, 'BGN')->value(); // 1.9558

$currency = new Currency();
$currency->convert(2, 'BGN')->value(); // 3.9116
```

or through the exposed API request.

```php
GET /api/v1/currency-converter?amount=2&currency=USD

{
    'success' => 1,
    'data' => [
        'rate' => 2.175
    ],
}
```

#### Testing

```bash
composer test
```

#### Credits

- [Isaac D. Arcilla](https://github.com/isaacdarcilla)

#### License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
