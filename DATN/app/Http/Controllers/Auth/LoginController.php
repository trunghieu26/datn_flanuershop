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
        $request->session()->put('user_id', $name['id']);
        if(!$request->expectsJson()) {
            return redirect('/');
        }
        return response()->json([
            'status'=>true,
        ], 200);
    }
    public function logout (Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }
}
