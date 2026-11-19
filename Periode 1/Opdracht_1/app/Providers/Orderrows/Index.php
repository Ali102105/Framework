<?php

namespace App\Providers\Orderrows;

use App\Models\OrderRow;

class Index
{
    public function index()
    {
        $orderrows = OrderRow::all();

        return view('orderrows.index', [
            'orderrows' => $orderrows,
        ]);
    }
}