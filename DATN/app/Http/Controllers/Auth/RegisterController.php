<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\RegisterService;
use App\Services\Auth\CheckUserExist;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index () {
        return view('login.register');
    }

    public function store(RegisterService $registerService,CheckUserExist $checkUserExist,Request $request) {

        $checkUserExist =  resolve(CheckUserExist::class)->CheckExist($request);
        if ($checkUserExist == 'true') {
            $registerService = resolve(RegisterService::class)->create($request);
            return redirect()->intended('login');
        } 
        return redirect()->intended('register');
        
    }
}
