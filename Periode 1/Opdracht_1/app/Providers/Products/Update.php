<?php

namespace App\Providers\Products;

use App\Models\Product;
use Illuminate\Http\Request;

class Update
{
public function update(Request $request, int $id)
{
    $product = Product::findOrFail($id);

    try {
        $product->name = $request->name;
        $product->save();
    } catch (\Exception $exception) {
        return redirect()
            ->back()
            ->with('error', 'Product kon niet worden bijgewerkt.');
    }

    return redirect()
        ->route('products.index')
        ->with('success', 'Product bijgewerkt.');
}
}