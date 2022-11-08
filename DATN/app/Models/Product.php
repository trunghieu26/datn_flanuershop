<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','catalog_id', 'name', 'price', 'content','discount','image', 'status'];
    use HasFactory;
}
