<?php

namespace Currency\CurrencyConverter\Exceptions;

use Exception;

class XmlUrlNotMatched extends Exception
{
    public function __construct($url)
    {
        parent::__construct("The exchange rate URL [$url] did not match.");
    }
}
