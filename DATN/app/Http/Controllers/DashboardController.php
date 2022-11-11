<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\CheckExistSession;
// use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index (Request $request, Product $product) {
        $products = Product::all()->sortBy(['created_at','desc'])->take(3);
        //$name = session()->get('name');
        return view("welcome",compact('products'));
    }
}


