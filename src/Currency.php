<?php

namespace Currency\CurrencyConverter;

use Currency\CurrencyConverter\Contracts\Converter;
use Exception;

class Currency extends Converter
{
    protected float|int $amount = 0;

    /**
     * Convert the given amount.
     */
    public function convert(float|int $amount, string $currency = null): static
    {
        try {
            $this->amount = $amount * $this->getRate($currency);
        } catch (Exception $exception) {
            report($exception);
        }

        return $this;
    }

    /**
     * Value of the converted amount.
     *
     * @return float|int
     */
    public function value(): float|int
    {
        return $this->amount;
    }

    public function toJson()
    {
    }
}
