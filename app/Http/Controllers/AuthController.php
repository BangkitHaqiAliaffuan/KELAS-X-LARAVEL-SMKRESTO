<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('Backend.login');
    }

    public function postlogin(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required|min:3',  
        ]);

        $data = $request->only('email','password');

        if(Auth::attempt($data)){
            
        } else {
            echo 'failed';
        }

    }
}
