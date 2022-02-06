<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            "title" => "Login User"
        ]);
    }
    public function authenticate(Request $request){

       $credential=  $request->validate([
            'email' => 'email:dns|required',
            'password' => 'required',

        ]);
       if (Auth::attempt($credential)) {
           $request->session()->regenerate();
           return redirect()->intended('/home');
           # code...
       }
       return back()->with('gagal','login failed!!');



    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
