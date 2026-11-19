<?php

namespace App\Providers\Reviews;

use App\Models\Review;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
            'product_id' => 'required|integer|exists:products,id',
        ]);

        $review = new Review();
        $review->comment = $request->comment;
        $review->user_id = $request->user_id;
        $review->product_id = $request->product_id;
        $review->save();

        return redirect()->route('reviews.index');
    }
}
