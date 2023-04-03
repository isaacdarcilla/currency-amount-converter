<?php

namespace Currency\CurrencyConverter\Contracts;

use Currency\CurrencyConverter\Exceptions\CurrencyNotSupported;
use Currency\CurrencyConverter\Exceptions\XmlUrlNotMatched;

class Converter extends XmlParser
{
    protected string $currency;

    protected array $supported_currency;

    protected float|int $rate;

    public function __construct()
    {
        parent::__construct();
        $this->currency = config('currency-amount-converter.currency');
        $this->supported_currency = config('currency-amount-converter.supported_currency');
    }

    /**
     * Get the daily rate in the API.
     *
     * @throws XmlUrlNotMatched|CurrencyNotSupported
     */
    public function getRate(float|int $amount, string $currency = null): Converter
    {
        if ($currency && !in_array($currency, $this->supported_currency)) {
            throw new CurrencyNotSupported($this->$currency);
        }

        $rate = 1;
        $xml = $this->parse();

        foreach ($xml->Cube->Cube->Cube as $item) {
            if ($item['currency'] == $currency ??= $this->currency) {
                $rate = (float)$item['rate'];
                break;
            }
        }

        $this->rate = $amount * $rate;

        return $this;
    }

    /**
     * Return string format
     *
     * @return float|int
     */
    public function toString(): float|int
    {
        return $this->rate;
    }

    /**
     * Return array format
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'success' => 1,
            'data' => [
                'rate' => $this->rate,
            ],
        ];
    }
}