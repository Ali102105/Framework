<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'orderdate',
        'user_id',
        'status'
    ];

    public function orderrows(): HasMany
    {
        return $this->hasMany(OrderRow::class, 'order_Id');
    }

    public function canDelete(): bool
    {
        return !$this->orderrows()->exists();
    }
}
