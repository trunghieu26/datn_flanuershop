<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forgot_password extends Model
{
    use HasFactory;

    protected $fillable = [ 'email','token' ];
}
