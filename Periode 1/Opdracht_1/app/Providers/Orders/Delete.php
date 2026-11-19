<?php

namespace App\Providers\Orders;

use App\Models\Order;

class Delete
{
    public function delete(int $id)
    {
        $order = Order::findOrFail($id);

        if (!$order->canDelete()) {
            return redirect()
                ->route('orders.index')
                ->with('error', 'Deze bestelling kan niet verwijderd worden omdat er nog bestelregels aan gekoppeld zijn.');
        }

        $order->delete();

        return redirect()->route('orders.index');
    }
}
