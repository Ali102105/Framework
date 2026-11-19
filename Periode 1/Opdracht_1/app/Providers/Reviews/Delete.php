<?php

namespace App\Providers\Reviews;

use App\Models\Review;

class Delete
{
    public function delete(int $id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index');
    }
}
