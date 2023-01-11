<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'status',
        'order_id',
        'quantity'
    ];
    use HasFactory;

    public function order(){
        return $this->hasManyThrough(Order::class, Product::class, 'order_id', 'product_id', 'id');
    }
}
