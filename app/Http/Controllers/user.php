<?php

namespace App\Http\Controllers;

class user extends Controller
{
    public function index(){
        return view('home');
    }

    public function aboutUS(){
        return view('about-us');
    }
}

