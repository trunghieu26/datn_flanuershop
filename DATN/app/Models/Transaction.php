<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_item;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'user_phone',
        'address',
        'amount',
        'payment',
        'payment_info',
        'security',
        'status',
    ];

    public function order()
    {
        return $this->hasMany(Order_item::class, 'transaction_id', 'id');
    }
}
