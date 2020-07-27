<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gethome(){
        return view('home');
    }

    public function getcontact(){
        return view('contact');
    }

    public function getabout(){
        return view('about');
    }
}
