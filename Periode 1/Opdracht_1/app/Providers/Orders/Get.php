<?php

namespace App\Providers\Orders;

use App\Models\Order;

class Get
{
    public function get(int $id)
    {
        $order = Order::findOrFail($id);

        return view('orders.get', [
            'order' => $order,
        ]);
    }
}