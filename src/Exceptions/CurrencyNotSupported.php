<?php

namespace Currency\CurrencyConverter\Exceptions;

use Exception;

class CurrencyNotSupported extends Exception
{
    public function __construct($currency)
    {
        parent::__construct("The currency [$currency] is not supported.");
    }
}
