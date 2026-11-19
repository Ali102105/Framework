<?php

namespace App\Providers\Orders;

use App\Models\Order;
use Illuminate\Http\Request;

class Update
{
public function update(Request $request, int $id)
{
    $order = Order::findOrFail($id);

    try {
        $order->name = $request->name;
        $order->save();
    } catch (\Exception $exception) {
        return redirect()
            ->back()
            ->with('error', 'Order kon niet worden bijgewerkt.');
    }

    return redirect()
        ->route('orders.index')
        ->with('success', 'Order bijgewerkt.');
}
}