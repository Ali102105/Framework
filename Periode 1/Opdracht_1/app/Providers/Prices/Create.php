<?php

namespace App\Providers\Prices;

use App\Models\Price;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric|min:0',
            'effdate' => 'required|date',
            'product_id' => 'required|integer|exists:products,id',
        ]);

        $price = new Price();
        $price->price = $request->price;
        $price->effdate = $request->effdate;
        $price->product_id = $request->product_id;
        $price->save();

        return redirect()->route('prices.index');
    }
}
