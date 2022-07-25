<?php

namespace App\Http\Controllers;
use App\Models\Konsumen;
use App\Models\Lembaga;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    public function index(){
        $konsumen = Konsumen::with('lembaga')->get();
        return view('konsumen',[
            "title" => "Data konsumen",
            "konsumens" => $konsumen,
            "lembagas" => Lembaga::all()
        ]);
        // return $konsumen;
    }

    public function store(Request $request){
        $datapost = $request->validate([
            'nama' =>'required',
            'lembaga' => 'required',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required'

        ]);

       Konsumen::create([
            'lembaga_id' => $request->lembaga,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);

        

       return redirect('/konsumen');
    }
}
