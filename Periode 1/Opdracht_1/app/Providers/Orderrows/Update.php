<?php

namespace App\Providers\Orderrows;

use App\Models\OrderRow;
use Illuminate\Http\Request;

class Update
{
public function update(Request $request, int $id)
{
    $orderrow = OrderRow::findOrFail($id);

    try {
        $orderrow->name = $request->name;
        $orderrow->save();
    } catch (\Exception $exception) {
        return redirect()
            ->back()
            ->with('error', 'Orderrow kon niet worden bijgewerkt.');
    }

    return redirect()
        ->route('orderrows.index')
        ->with('success', 'Categorie bijgewerkt.');
}
}