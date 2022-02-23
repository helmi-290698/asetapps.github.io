<?php

namespace App\Http\Controllers;
use App\Models\Konsumen;

use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    public function index(){
        return view('konsumen',[
            "title" => "Data konsumen",
            "konsumens" => Konsumen::all()
        ]);
    }
}
