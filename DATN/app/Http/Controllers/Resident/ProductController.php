<?php

namespace App\Http\Controllers\Resident;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function maleProduct (Request $request) {
        $products = Product::where('name', 'LIKE', 'Sản phẩm nam%')->get();
        $male_shirt = Product::where('name', 'LIKE', 'Áo%nam%')->get();
        $user_id =  $request->session()->get('user_id');
        $Order = Order::with('Product')->where('user_id', $user_id)->get();
        $quantity = 0;
        foreach($Order as $d) {
            $quantity += $d->quantity;
        }
        return view('products.male', compact('products', 'quantity','male_shirt'));
    }
}
