<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        Price::create([
            'price' => 899.99,
            'effdate' => now(),
            'product_id' => 1,
        ]);

        Price::create([
            'price' => 249.99,
            'effdate' => now(),
            'product_id' => 2,
        ]);

        Price::create([
            'price' => 39.99,
            'effdate' => now(),
            'product_id' => 3,
        ]);

        Price::create([
            'price' => 79.99,
            'effdate' => now(),
            'product_id' => 4,
        ]);
    }
}