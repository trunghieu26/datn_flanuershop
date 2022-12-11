<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    protected $fillable = ['id','catalog_id', 'name', 'price', 'content','discount','image', 'status'];
    use HasFactory;

    public function Order () {
        return $this->hasMany(Order::class);
    }
}
