<?php

namespace App\Http\Controllers\Resident;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class CartProductController extends Controller
{
    public function index($id, Request $request, Product $products) {
        $user_id =  $request->session()->get('user_id');
        $comment = Comment::all()->where('product_id', $id);
        $Order = Order::with('Product')->where('user_id', $user_id)->get();
        $quantity = 0;
        foreach($Order as $d) {
            $quantity += $d->quantity;
        }
        $products = Product::where('id', $id)->with('Comment')->get();
        $users = User::where('id', $user_id )->first();
        $like_comment = Like::where('user_id', $user_id)->where('object_type','comment')->get();
        return view('resident.cart', compact('products', 'quantity', 'users', 'comment'));
    }
    public function addToCart($id, Request $request) {
        $products = Product::findOrFail($id);
        $input = $request->all();
        if (!$products) return $this->sendError('Product does not exist');
        $order = Order::where('product_id', $id)->first();
        if ($order == null) {
            Order::create($input);
        } else {
            $input_new['product_id'] = $input['product_id'];
            $input_new['quantity'] = $order['quantity'] + $input['quantity'];
            $input_new['amount'] = $order['amount'] + $input['amount']*$input['quantity'];
            Order::where('product_id', $id)->update($input_new);
        }
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function listCartOrder(Request $request) {
        $user_id =  $request->session()->get('user_id');
        
        $Order = Order::with('Product')->where('user_id', $user_id)->get();
        $quantity = 0;
        foreach($Order as $d) {
            $quantity += $d->quantity;
        }
        return view('resident.order_list', compact('quantity', 'Order'));
    }

    public function comment(Request $request ){
        $data = new Comment();
        $data->product_id=$request->product_id;
        $data->parent_id =$request->get('parent_id');
        $data->comment=$request->comment;
        $data->user_id =$request->session()->get('user_id');
        $data->save();
        return response()->json([
            'bool'=>true,
            'parent_id' => $data->parent_id
        ]);
    }

    public function Like(Request $request) {
        $like = new Like();
        $like->product_id = $request->product_id;
        $like->object_type = $request->object_type;
        $like->object_id = $request->object_id;
        $user_id =  $request->session()->get('user_id');
        $like->user_id = $user_id;
        $result = $like->Like($like);
        echo json_encode($result);
    }

}
