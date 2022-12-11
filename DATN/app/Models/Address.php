<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['id', 'user_id','municipality','lot_number','building_name', 'building_no'];
    use HasFactory;
}
