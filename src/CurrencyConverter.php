<?php

namespace Currency\CurrencyConverter;

use Currency\CurrencyConverter\Contracts\Converter;
use Currency\CurrencyConverter\Exceptions\CurrencyNotSupported;
use Currency\CurrencyConverter\Exceptions\XmlUrlNotMatched;

class CurrencyConverter extends Converter
{
    protected float|int $amount = 0;

    /**
     * Convert the given amount.
     *
     * @throws XmlUrlNotMatched
     * @throws CurrencyNotSupported
     */
    public function convert(float|int $amount, string $currency = null): static
    {
        $this->amount = $this->getRate($amount, $currency)->toString();

        return $this;
    }

    /**
     * Value of the converted amount.
     */
    public function value(): float|int
    {
        return $this->amount;
    }
}
