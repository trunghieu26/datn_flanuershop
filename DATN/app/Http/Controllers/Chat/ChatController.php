<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\Message;
use App\Models\Chat;

class ChatController extends Controller
{
    public function view () {
        $chats = Chat::all();
        return view('chat.chat', compact('chats'));
    }

    public function sendMessage (Request $request)
    {
        $user_id =  $request->session()->get('user_id');
        event(
            new Message(
                $request->input('username'),
                $request->input('message')
            )
        );
        Chat::create([
            'user_id' => $user_id,
            'message' => $request->message
        ]);
        
        return ["success" =>true];
    }
}
