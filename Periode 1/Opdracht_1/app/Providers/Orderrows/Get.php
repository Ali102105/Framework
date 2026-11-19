<?php

namespace App\Providers\Orderrows;

use App\Models\OrderRow;

class Get
{
    public function get(int $id)
    {
        $orderrow = OrderRow::findOrFail($id);

        return view('orderrows.get', [
            'orderrow' => $orderrow,
        ]);
    }
}