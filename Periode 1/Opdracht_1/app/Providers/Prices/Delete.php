<?php

namespace App\Providers\Prices;

use App\Models\Price;

class Delete
{
    public function delete(int $id)
    {
        $price = Price::findOrFail($id);
        $price->delete();

        return redirect()->route('prices.index');
    }
}
