<?php

namespace App\Http\Controllers\Resident;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order_item;
use Illuminate\Http\Request;

class CartProductController extends Controller
{
    public function index($id) {
        $products = Product::where('id', $id)->get();
        return view('resident.cart', compact('products'));
    }
    public function addToCart($id, Request $request) {
        $products = Product::findOrFail($id);
        $input = $request->all();
        if (!$products) return $this->sendError('Product does not exist');
        $order = Order_item::where('product_id', $id)->first();
        if ($order == null) {
            Order_item::create($input);
        } else {
            $input_new['product_id'] = $input['product_id'];
            $input_new['quantity'] = $order['quantity'] + $input['quantity'];
            $input_new['amount'] = $order['amount'] + $input['amount']*$input['quantity'];
           Order_item::updateOrCreate($input_new);
        }
    }
    // public function update(Request $request)
    // {
    //     if($request->id && $request->quantity){
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Cart updated successfully');
    //     }
    // }
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
}
