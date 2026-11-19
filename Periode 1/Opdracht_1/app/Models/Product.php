<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'category_id',
    ];


    public function canDelete(): bool
    {
        return !\Illuminate\Support\Facades\DB::table('prices')
            ->where('product_id', $this->id)->exists()
            && !\Illuminate\Support\Facades\DB::table('reviews')
                ->where('product_id', $this->id)->exists()
            && !\Illuminate\Support\Facades\DB::table('orderrows')
                ->where('product_id', $this->id)->exists();
    }

}