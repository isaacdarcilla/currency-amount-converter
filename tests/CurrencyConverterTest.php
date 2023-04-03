<?php

use Currency\CurrencyConverter\Contracts\Converter;
use Currency\CurrencyConverter\Currency;

use Illuminate\Testing\Fluent\AssertableJson;

use function Pest\Laravel\get;

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

it('has converter route', function () {
    get(route('currency.convert'))->assertStatus(200);
});

it('has converts correct rate', function () {
    $converter = new Converter();

    $rate = $converter->getRate(1, 'USD')->toString();

    $response = get(
        route(
            'currency.convert',
            ['amount' => 1, 'currency' => 'USD']
        )
    );

    expect($response->getOriginalContent()['data']['rate'])
        ->toEqual($rate)
        ->and($response)->assertJson(fn(AssertableJson $json) => $json
            ->has('success')
            ->has('data.rate')
            ->where('success', 1)
            ->where('data.rate', $rate)
        );
});