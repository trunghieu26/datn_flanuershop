<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurstaffController extends Controller
{
    public function index()
    {
        return view('admin.ourstaff');
    }
}
