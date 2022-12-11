<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Order;

// use App\Http\Controllers\CheckExistSession;
// use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index (Request $request, Product $product) {
        $products = Product::all()->sortBy(['created_at','desc'])->take(3);
        $user_id =  $request->session()->get('user_id');
        
        $data = Order::where('user_id', $user_id)->get();
        $quantity = 0;
        foreach($data as $d) {
            $quantity += $d->quantity;
        }
        return view("welcome",compact('products', 'quantity'));
    }
}


