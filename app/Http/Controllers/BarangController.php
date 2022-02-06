<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BarangController extends Controller
{
    
     
    public function all_barang(){
        return view('home', [
            "title" => "Dashboard",
            "barangs" => Barang::all(),
            "categories" => Category::all(),
            "jumlahkategori" => Category::all()->count(),
            "jumlahfisik" => Category::all()->where('nama_type', 'Fisik')->count(),
            "jumlahvirtual" => Category::all()->where('nama_type', 'Virtual')->count(),
            "jumlah" => Barang::all()->count()
        ]);

        
    }
    public function data_fisik(){

    $barang = Barang::with(['category','status'])->whereHas('category',function (Builder $query){
            $query->where('nama_type','Fisik');
    })->get();
    //  return $barang;

       return view('fisik',[
        "title" => "Data Fisik",
        "barangs" => $barang,
       ]);
    }

    public function data_virtual(){

        $barang = Barang::with(['category','status'])->whereHas('category',function (Builder $query){
            $query->where('nama_type','Virtual');
        })->get();
    //  return $barang;

       return view('virtual',[
        "title" => "Data Fisik",
        "barangs" => $barang,
       ]);
    
    }

    public function tambahfisikform(){
        return view('form.tambahfisik',[
            "title" => "Tambah data fisik",
            "datakategori" => Category::all()->where('nama_type', 'Fisik'),
            "datastatus" => Status::all()->where('nama_type','Fisik'),
            "kodebarang" => Barang::orderBy('created_at', 'desc')->first()
        ]);
    }
    public function tambahvirtualform(){
        return view('form.tambahvirtual',[
            "title" => "Tambah data virtual",
            "datakategori" => Category::all()->where('nama_type', 'Virtual'),
            "datastatus" => Status::all()->where('nama_type','Virtual'),
            "kodebarang" => Barang::orderBy('created_at', 'desc')->first()
        ]);
    }
    public function store(Request $request)
    {
        $datapost = $request->validate([
            'kodeaset' =>'required',
            'namaaset' => 'required|max:20',
            'slug' => 'required',
            'merk' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required|max:200',

        ]);

        Barang::create([
            'kode_barang' => $request->kodeaset,
            'nama_barang' => $request->namaaset,
            'slug' => $request->slug,
            'merk' => $request->merk,
            'category_id' => $request->kategori,
            'status_id' => $request->status,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);

        

       return redirect('/fisik');

    }
    public function store_virtual(Request $request)
    {
        $datapost = $request->validate([
            'kodeaset' =>'required',
            'namaaset' => 'required',
            'slug' => 'required',
            'merk' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'jumlah' => 'required',
            'demo2' => 'required',
            'periode' => 'required',
            'expired' => 'required',
            'link' => 'required',
            'keterangan' => 'required|max:200',

        ]);

        Barang::create([
            'kode_barang' => $request->kodeaset,
            'nama_barang' => $request->namaaset,
            'slug' => $request->slug,
            'merk' => $request->merk,
            'category_id' => $request->kategori,
            'status_id' => $request->status,
            'jumlah' => $request->jumlah,
            'nominal_tagihan' => $request->demo2,
            'periode_tagihan' =>$request->periode,
            'tgl_expired' => $request->expired,
            'username_email' => $request->user,
            'password' => Crypt::encryptString($request->password),
            'link_aset' => $request->link,
            'keterangan' => $request->keterangan,
        ]);

        

       return redirect('/virtual');

    }
    public function checkSlug(Request $request){
         $slug = SlugService::createSlug(Barang::class, 'slug', $request->namaaset);
         return response()->json(['slug' => $slug]);

    }
    public function tes(){
        $dataakhir = Barang::orderBy('created_at', 'desc')->first();
        return $dataakhir;
    }
   
}
