<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Carcontroller extends Controller
{
    // public function car(){
    //     return view("login");
    // }
    public function login(){
        return view("login");
    }
    public function received(request $Request){
        $msg='your email is: '.$request->email .' your password is: '.$request->password;
        // return  'your email is: '.$reques->email;
        return  $msg;
    }

    
}
