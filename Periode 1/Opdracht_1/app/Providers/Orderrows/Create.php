<?php

namespace App\Providers\Orderrows;

use App\Models\OrderRow;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'orderId' => 'required|integer|exists:orders,id',
            'productId' => 'required|integer|exists:products,id',
        ]);

        $orderrow = new OrderRow();
        $orderrow->order_id = $request->orderId;
        $orderrow->product_id = $request->productId;
        $orderrow->save();

        return redirect()->route('orderrows.index');
    }
}
