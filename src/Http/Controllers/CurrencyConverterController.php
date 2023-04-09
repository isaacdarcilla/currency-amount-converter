<?php

namespace Currency\CurrencyConverter\Http\Controllers;

use Currency\CurrencyConverter\Contracts\Converter;
use Currency\CurrencyConverter\Exceptions\CurrencyNotSupported;
use Currency\CurrencyConverter\Exceptions\XmlUrlNotMatched;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CurrencyConverterController extends Controller
{
    /**
     * @throws XmlUrlNotMatched
     * @throws CurrencyNotSupported
     */
    public function __invoke(Request $request): JsonResponse
    {
        $converter = new Converter();

        $amount = $request->input('amount') ?? 1;
        $currency = $request->input('currency');

        return response()->json(
            $converter->getRate(
                $amount,
                str($currency)->upper()
            )->toArray(),
        );
    }
}
