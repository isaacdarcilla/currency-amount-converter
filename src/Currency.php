<?php

namespace Currency\CurrencyConverter;

use Currency\CurrencyConverter\Contracts\Converter;
use Currency\CurrencyConverter\Exceptions\CurrencyNotSupported;
use Currency\CurrencyConverter\Exceptions\XmlUrlNotMatched;

class Currency extends Converter
{
    protected float|int $amount;

    /**
     * Convert the given amount.
     *
     * @throws CurrencyNotSupported|XmlUrlNotMatched
     */
    public function convert(float|int $amount, string $currency = null): static
    {
        $this->amount = $amount * $this->getRate($currency);

        return $this;
    }

    /**
     * Return the converted amount.
     *
     * @return float|int
     */
    public function value(): float|int
    {
        return $this->amount;
    }
}
