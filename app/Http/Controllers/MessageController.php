<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //
    public function show($id){
        $message = Message::find($id);
        return view('dashboard.Message')->with('message',$message);
    }
    public function storeMessage(Request $request){
        $nom = $request->input('nom');
        $mail = $request->input('mail');
        $num = $request->input('num');
        $message = $request->input('message');

        Message::create([
            'name_user' => $nom,
            'mail_user' => $mail,
            'num_user' => $num,
            'message' => $message,
        ]);
        return redirect()->back();
    }
}
