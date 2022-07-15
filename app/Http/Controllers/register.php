<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate(
                [
                    'email'    => 'required|email',
                    'password' => 'required',
                    'confirm_pass' => 'required|same:password'
                ]  
        );
        
        echo "<pre>";
        print_r($request->all()); die;
    }

}
