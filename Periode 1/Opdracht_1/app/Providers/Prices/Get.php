<?php

namespace App\Providers\Prices;

use App\Models\Price;

class Get
{
    public function get(int $id)
    {
        $prices = Price::findOrFail($id);

        return view('prices.get', [
            'prices' => $prices,
        ]);
    }
}