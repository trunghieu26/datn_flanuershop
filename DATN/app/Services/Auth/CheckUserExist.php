<?php

namespace App\Services\Auth;

use App\Models\User;
use Throwable;

class CheckUserExist {
    public function CheckExist($data)
    {
        try {
            $email = $data->email;
            $phone = $data->phone;

            $check_mail = User::where('email', $email)->first();

            $check_phone = User::where('phone', $phone)->first();
            //$checkUserExist = User::where('email', $email)->where('phone', $phone)->first();

            if($check_mail != null || $check_phone != null || (($check_mail && $check_phone) != null)){
                return false;
            }
            return true;
        } catch (Throwable $e) {
            return ($e);
        }
    }
} 