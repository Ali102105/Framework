<?php

namespace App\Providers\Orderrows;

use App\Models\OrderRow;

class Delete
{
    public function delete(int $id)
    {
        $orderrow = OrderRow::findOrFail($id);

        $orderrow->delete();

        return redirect()->route('orderrows.index');
    }
}
