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
            "pembelanjaans" => Pembelanjaan::all(),
            "categories" => Category::all()
           
        ]);
    }
    public function store(Request $request){
        $datapost = $request->validate([
            'barang' =>'required',
            'merek' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'total' => 'required',
            'tglpembelian' => 'required'

        ]);

       Pembelanjaan::create([
            'id_categories' => $request->kategori,
            'nama_barang' => $request->barang,
            'harga' => $request->harga,
            'merek' => $request->merek,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
            'tgl_pembelian' => $request->tglpembelian,
        ]);

        

       return redirect('/pembelanjaan');
    }
}
