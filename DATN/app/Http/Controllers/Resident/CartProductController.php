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
        $input = new Order_item();
        $input->product_id = $id;
        $input->quantity = $request->quantity;
        $input->amount = $request->amount;
        if (!$products) return $this->sendError('Product does not exist');
        
        $order = Order_item::where('product_id', $id)->first();
        if ($order == null) {
            //$input->save();
        } else {
            //dd(123);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
}
