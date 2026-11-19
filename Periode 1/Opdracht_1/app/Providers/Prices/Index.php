<?php

namespace App\Providers\Prices;

use App\Models\Price;

class Index
{
    public function index()
    {
        $prices = Price::all();

        return view('prices.index', [
            'prices' => $prices,
        ]);
    }
}