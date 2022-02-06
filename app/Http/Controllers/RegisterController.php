<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        
      $validatedData =  $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email:dns|unique:users',
            'role' => 'required',
            'lembaga' => 'required',
            'password' => 'required|min:8|max:20',
            'foto' => 'image|file|max:2048'    

        ]);

        $validatedData['foto'] = $request->file('foto')->store('user-image');

        $validatedData['password'] = Hash::make($validatedData['password']);
 
       User::create($validatedData);

        

       return redirect('/user')->with('success','Data Berhasil disimpan !!');
        
    }
}
