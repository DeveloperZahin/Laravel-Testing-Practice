<?php

namespace App\Services;

class CurrencyService
{
    const RATES = [
        'usd' => [
            'bdt' => 109.60,
            'rub' => 87.96,
        ]
    ];

    // public function convert(float $amount, string $currencyFrom , string $currencyTo):float
    // {
    //     $rate = self::RATES[$currencyFrom][$currencyTo] ?? 0;

    //     return round($amount * $rate,2);
    // }

    public function convert(float $amount, string $currencyFrom, string $currencyTo): float
    {
        $rate = self::RATES[$currencyFrom][$currencyTo] ?? 0;

        // Add this for debugging
        // echo "Converting $amount $currencyFrom to $currencyTo at rate: $rate\n";

        return round($amount * $rate, 2);
    }

}
