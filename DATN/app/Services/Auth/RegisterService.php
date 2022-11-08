<?php

namespace App\Services\Auth;

use App\Models\User;
use Throwable;

class RegisterService {
    public function create($data)
    {
        try {
            User::create([
                'name' => $data->name,
                'email' => $data->email,
                'phone' => $data->phone,
                'address' => $data->address,
                'password' => $data->password,
                'role' => 'resident'
            ]);
        } catch (Throwable $e) {
            return ($e);
        }
    }
} 