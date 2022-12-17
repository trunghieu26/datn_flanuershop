<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['id','user_id', 'product_id', 'parent_id', 'comment', 'count_like'];

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function replies() {
        return $this->hasMany(Comment::class,'parent_id','id');
    }

    public function Like () {
        return $this->hasMany(Like::class,'object_id','id');
    }

    public function Product() {
        return $this->belongsTo(Product::class);
    }
}
