<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'Een krachtige laptop voor dagelijks gebruik.',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Monitor',
            'description' => 'Een 27 inch computermonitor.',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Muis',
            'description' => 'Een draadloze computermuis.',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Toetsenbord',
            'description' => 'Een mechanisch toetsenbord.',
            'category_id' => 2,
        ]);
    }
}