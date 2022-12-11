<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order extends Model
{
    protected $fillable = ['id', 'user_id','product_id', 'quantity', 'amount'];
    use HasFactory;

    public function Product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
