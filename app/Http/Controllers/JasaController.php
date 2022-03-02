<?php

namespace App\Http\Controllers;
use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    public function index(){
        return view('jasa',[
            "title" => "Data jasa",
            "jasas" => Jasa::all()
        ]);
    }
    public function store(Request $request){
        $datapost = $request->validate([
            'namajasa' =>'required',
            'biaya' => 'required',

        ]);

       Jasa::create([
            'nama_jasa' => $request->namajasa,
            'biaya' => $request->biaya,
            
        ]);

        

       return redirect('/jasa');
    }
}
