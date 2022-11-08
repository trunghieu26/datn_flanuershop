<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index (Request $request) {
        $value = $request->session()->get('name');
        return view("contact.index")->with('name', $value);
    }
}


