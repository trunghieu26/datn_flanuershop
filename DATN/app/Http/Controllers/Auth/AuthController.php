<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\forgot_password;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Notifications\ResetPasswordRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function forgotPassword () {
        return view('login.forgotpassword');
    }
    public function sendMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);
        $token = Str::random(60);
        \DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);

        $action_link = route('forgot.password.form',['token'=>$token, 'email'=>$request->email]);
        $body = "Chúng tôi đã gửi một link resert password đến ".$request->email."bạn có thể thay đổi  mật hkaaur bằng cách click vào đây";
        \Mail::send('emailforgot',['action_link'=>$action_link, 'body'=>$body], function($message) use($request){
            $message->from('tthieu.18it2@vku.udn.vn');
            $message->to($request->email,'Your name')
                    ->subject('Reset password');
        });

        return back()->withInput()->with('done', 'Link reset password đã được gửi thành công đến gmail của bạn');
    }

    public function showResetLink(Request $request, $token = null)
    {
        return view('login.reset')->with(['token'=>$token, 'email'=>$request->email]);
    }

    public function resetPassword (Request $request)
    {
        
        $check_token = \DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();
       
        if(!$check_token) {
            return back()->withInput()->with('fail', 'Không tìm thấy token');
        } else {
            User::where('email', $request->email)->update([
                'password'=> $request->password
            ]);

            \DB::table('password_resets')->where([
                'email' => $request->email
            ])->delete();
            return redirect()->route('login.user')->withInput()->with('success', 'Bạn đã đổi mật khẩu thành công ! Bạn có thể sử dụng mật khẩu mới để đăng nhập');
        }
    }
}
