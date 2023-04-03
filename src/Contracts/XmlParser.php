<?php

namespace Currency\CurrencyConverter\Contracts;

use Currency\CurrencyConverter\Exceptions\XmlUrlNotMatched;
use SimpleXMLElement;

class XmlParser
{
    protected string $xml;

    protected string $url;

    protected string $defaultUrl = 'https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';

    public function __construct()
    {
        $this->url = config('currency-amount-converter.exchange_rate');
    }

    /**
     * Parse the given URL.
     *
     * @throws XmlUrlNotMatched
     */
    public function parse(): bool|SimpleXMLElement
    {
        if ($this->url !== $this->defaultUrl) {
            throw new XmlUrlNotMatched($this->url);
        }

        return simplexml_load_file($this->url);
    }
}
