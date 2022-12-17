<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','product_id','object_type','object_id'];
    public function User() {
        return $this->belongsTo(User::class);
    }
    public function Product() {
        return $this->belongsTo(Product::class);
    }

    public function Comment() {
        return $this->belongsTo(Comment::class);
    }

    public function Like ($like) {
        $check = Like::where('user_id', $like->user_id)->where('object_type', 'comment')->where('object_id',$like->object_id)->exists();
        if($check) {
            if ($like->object_type == 'comment') {
                Like::where('user_id', $like->user_id)->where('object_type','=','comment')->where('object_id','=',$like->object_id)->delete();
                $likeCount = Comment::where('id', $like->object_id)->value('count_like');
                Comment::where('id', $like->object_id)->update(['count_like' => DB::raw($likeCount-1)]);
                $likeCount = $likeCount - 1;
            }
            $likeType= '0';
        } else {
            Like::create ([
                'user_id'=> $like->user_id,
                'product_id'=>$like->product_id,
                'object_type' => 'comment',
                'object_id'=>$like->object_id
            ]);
            $likeCount = Comment::where('id', $like->object_id)->value('count_like');
            Comment::where('id', $like->object_id)->update(['count_like' => DB::raw($likeCount + 1)]);
            $likeCount = $likeCount + 1;
            $likeType = '1';
        }

        $result = array(
            'bool' => true,
            'user_id' => $like->user_id,
            'like_type' => $likeType,
            'count_like' => $likeCount,
            'object_type' => $like->object_type
        );
        return $result;
    }
    
}
