<?php

namespace App\Services\Auth;
use App\Models\User;
use Throwable;

class LoginServices {
    public function login($data) {
        try {
            $email = $data->email;
            $password = $data->password;

            $checkUserExist = User::where('email', $email)->where('password', $password)->first();

            if(($email == 'admin@gmail.com') && ($password == '123456789')){
                return true;
            } else if($checkUserExist != null){
                return false;
            }
            else {
                return ('not_exist');
            }
        } catch (Throwable $e) {
            return ('123');
        }
    }
} 