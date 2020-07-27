<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function submit(Request $request)
    {

        $data =$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);
        //  $message = new Message;
        //  $message->name = $request->input('name');
        //  $message->email = $request->input('email');
        //  $message->message = $request->input('message');

        //  $message->save();
            Message::create($data);

        return redirect('/')->with('success','message sent');
    }
    public function show()
    {
        $messages = Message::all();
        return view('show',compact('messages'));
    }
}
