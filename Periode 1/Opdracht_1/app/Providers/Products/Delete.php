<?php

namespace App\Providers\Products;

use App\Models\Product;

class Delete
{
    public function delete(int $id)
    {
        $product = Product::findOrFail($id);

        if (!$product->canDelete()) {
            return redirect()
                ->route('products.index')
                ->with('error', 'Dit product kan niet verwijderd worden omdat er nog gegevens aan gekoppeld zijn.');
        }

        $product->delete();

        return redirect()->route('products.index');
    }
}
