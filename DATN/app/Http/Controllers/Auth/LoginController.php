<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\LoginServices;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index () {
        return view('login.index');
    }

    public function login(LoginServices $loginServices, Request $request) {
        $name = User::where('email', $request->email)->first();
        $loginServices = resolve(LoginServices::class)->login($request);

        if($loginServices == 'true') {
            return redirect()->intended('admin');
        } else if($loginServices == 'not_exist') {
            return redirect()->intended('login');
        }
        $request->session()->put('name', $name['name']);
        return redirect('/');
    }
    public function logout (Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }
}
