<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CheckExistSession extends Controller
{
    public function __construct(Request $request) {
        if ($request->session()->has('name')) {
            return true;
        }
        return false;
    }
}
