<?php

namespace App\Providers\Products;

use App\Models\Product;

class Index
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', [
            'products' => $products,
        ]);
    }
}