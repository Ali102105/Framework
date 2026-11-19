<?php

namespace App\Providers\Orders;

use App\Models\Order;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'orderdate' => 'required|date',
            'userId' => 'required|integer|exists:users,id',
            'status' => 'required|integer',
        ]);

        $order = new Order();
        $order->orderdate = $request->orderdate;
        $order->user_id = $request->userId;
        $order->status = $request->status;
        $order->save();

        return redirect()->route('orders.index');
    }
}
