<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index (Request $request) {
        $value = $request->session()->get('name');
        $user_id =  $request->session()->get('user_id');
        
        $Order = Order::with('Product')->where('user_id', $user_id)->get();
        $quantity = 0;
        foreach($Order as $d) {
            $quantity += $d->quantity;
        }
        return view("contact.index", compact('value','quantity'));
    }
}


