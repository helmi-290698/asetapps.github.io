<?php

namespace App\Http\Controllers;
use App\Models\Status;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
class StatusController extends Controller
{
    public function index(){
        return view('status',[

            "title" => "Data Status",
            "statuses" => Status::all(),
            "jumlahstatus" => Status::all()->count(),
            "jumlahstatusfisik" => Status::all()->where('nama_type','Fisik')->count(),
            "jumlahstatusvirtual" => Status::all()->where('nama_type','Virtual')->count()

        ]);

    }
    public function store(Request $request){
        $datapost = $request->validate([
            'status' =>'required',
            'slug' => 'required|unique:statuses',
            'namatype' => 'required',
            

        ]);

        Status::create([
            'nama_status' => $request->status,
            'slug' => $request->slug,
            'nama_type' => $request->namatype,
            
            
        ]);

        

       return redirect('/status');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Status::class, 'slug', $request->status);
        return response()->json(['slug' => $slug]);

   }
}