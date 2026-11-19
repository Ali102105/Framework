<?php

namespace App\Providers\Reviews;

use App\Models\Review;
use Illuminate\Http\Request;

class Update
{
public function update(Request $request, int $id)
{
    $review = Review::findOrFail($id);

    try {
        $review->name = $request->name;
        $review->save();
    } catch (\Exception $exception) {
        return redirect()
            ->back()
            ->with('error', 'Review kon niet worden bijgewerkt.');
    }

    return redirect()
        ->route('reviews.index')
        ->with('success', 'Review bijgewerkt.');
}
}