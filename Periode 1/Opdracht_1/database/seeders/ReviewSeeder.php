<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::create([
            'comment' => 'Goed product, werkt perfect.',
            'user_id' => 1,
            'product_id' => 1,
        ]);

        Review::create([
            'comment' => 'Goede kwaliteit.',
            'user_id' => 2,
            'product_id' => 2,
        ]);
    }
}