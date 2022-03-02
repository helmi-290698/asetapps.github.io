<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use Illuminate\Http\Request;

class LembagaController extends Controller
{
    //
    public function index(){
        return view('lembaga',[
            "title" => "Data Lembaga",
            "lembagas" => Lembaga::all()
        ]);
    }
    public function store(Request $request){
        $datapost = $request->validate([
            'nama_lembaga' =>'required|unique:lembagas',
            
            

        ]);

        Lembaga::create([
            'nama_lembaga' => $request->nama_lembaga,
            
            
            
        ]);

        

       return redirect('/lembaga');
    }

    public function getDataLembaga(){

        
    }
}
