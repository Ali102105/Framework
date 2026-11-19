<?php

namespace App\Providers\Prices;

use App\Models\Price;
use Illuminate\Http\Request;

class Update
{
public function update(Request $request, int $id)
{
    $price = Price::findOrFail($id);

    try {
        $price->name = $request->name;
        $price->save();
    } catch (\Exception $exception) {
        return redirect()
            ->back()
            ->with('error', 'Price kon niet worden bijgewerkt.');
    }

    return redirect()
        ->route('prices.index')
        ->with('success', 'Price bijgewerkt.');
}
}