<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['id','user_id', 'order_id', 'parent_id', 'comment'];

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Order() {
        return $this->belongsTo(Order::class);
    }
}
