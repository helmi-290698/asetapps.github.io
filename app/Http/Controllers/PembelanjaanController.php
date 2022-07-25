<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Pembelanjaan;
class PembelanjaanController extends Controller
{
    public function datapembelanjaan(){
        return view('pembelanjaan',[
            "title" => "Data Pembelanjaan",
            "pembelanjaans" => Pembelanjaan::with('category')->get(),
            "categories" => Category::all()
           
        ]);
    }
    public function store(Request $request){
        // dd($request->all());
        $datapost = $request->validate([
            'barang' =>'required',
            'tipebiaya' =>'required',
            'harga' => 'required',
            'tglpembelian' => 'required'

        ]);

       Pembelanjaan::create([
            'tipe_biaya' => $request->tipebiaya,
            'category_id' => $request->kategori,
            'nama_barang' => $request->barang,
            'harga' => $request->harga,
            'merek' => $request->merek,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
            'tgl_pembelian' => $request->tglpembelian,
        ]);

        

       return redirect('/pembelanjaan');
    }
    public function getPembelanjaanId($id){
        $query=Pembelanjaan::where('id',$id)->first();

        return response()->json(['pembelanjaan' =>$query]);
    }
}
