<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class authController extends Controller
{
    function login(){
        return view('login');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => "required",
            'password' => "required"
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'))->with('error');
        }
        else{
            redirect(route('login'))->with('error', 'login details are not valid');
        }
    }

    function register(){
        return view('register');
    }
}
