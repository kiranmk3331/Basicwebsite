<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function submit(Request $request){

        $data =$request->validate([
            'name' => 'required',
            'email' => 'required|unique|email'

        ]);

    }
}
