<?php

namespace App\Http\Controllers\Resident;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MaleResidentController extends Controller
{
    public function index (Product $product) {
        $product = Product::where('name','LIKE',"%nam%")->get();
        dd($product);
    }
}
