<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user',[
            "title" => "Data User",
            "users" => User::orderBy('created_at','ASC')->get()
        ]);
    }

    public function tambah_user(){
        return view('form.tambahuser',[
            "title" => "Tambah User"
        ]);
    }
    public function testing(){
        $encrypt = Hash::make('123456');
        $decrypt = Hash::check('123456',$encrypt);
        return $encrypt;
    }
}
