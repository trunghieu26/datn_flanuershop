<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $fillable = ['id','transaction_id', 'product_id', 'quantity', 'amount'];
    use HasFactory;
}
