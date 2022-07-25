<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Konsumen;
use App\Models\Pembayaran;
use App\Models\Pembelanjaan;
use App\Models\Pembiayaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembiayaanController extends Controller
{
    public function index(){
        $pembayaran = Pembiayaan::with('pembelanjaan','jasa','konsumen')->get();
   
        return view('biaya',[
            "title" => "Data Pembiayaan",
            "pembayarans" => $pembayaran 
            
        ]);
    }
    public function tambah_pembayaran(){
        return view('form.tambahpembayaran',[
            "title" => "Tambah pembayaran",
            "invoices" => Pembayaran::orderBy('created_at', 'desc')->first(),
            "konsumens" => Konsumen::all(),
            "jasas" => Jasa::all(),
            "barangs" => Pembelanjaan::all()

        ]);
    }

    public function store(Request $request){
            // $data = $request->all();

            
       
            foreach($request->namabarang as $key => $value ){
                Pembiayaan::create([
                'no_invoice' => $request->noinvoice,
                'konsumen_id' => $request->namakonsumen,
                'pembelanjaan_id' =>$request->namabarang[$key],
               
            ]);
            }
        
                    $data=Pembiayaan::with('pembelanjaan','konsumen')->where('no_invoice',$request->noinvoice)->get();
                    foreach($data as $hasil){

                        }

                $pencarian= Pembayaran::where('no_invoice',$request->noinvoice)->first();      
                      
                if( $pencarian == null){
                    
                    $query = DB::table('pembelanjaans')
                    ->join('pembiayaans', 'pembelanjaans.id', '=', 'pembiayaans.pembelanjaan_id')
                    ->join('konsumens', 'konsumens.id', '=', 'pembiayaans.konsumen_id')
                    ->where('pembiayaans.no_invoice', '=',$request->noinvoice)
                    ->sum('pembelanjaans.harga');
       

   
                    Pembayaran::create([
                        'pembiayaan_id' =>$hasil->id,
                        'no_invoice' => $request->noinvoice,
                        'nama_konsumen' => $hasil->konsumen->nama,
                        'total_biaya'  =>$query,
                    ]);

                }else{
                    $query = DB::table('pembelanjaans')
                    ->join('pembiayaans', 'pembelanjaans.id', '=', 'pembiayaans.pembelanjaan_id')
                    ->join('konsumens', 'konsumens.id', '=', 'pembiayaans.konsumen_id')
                    ->where('pembiayaans.no_invoice', '=',$request->noinvoice)
                    ->sum('pembelanjaans.harga');


                    Pembayaran::where('no_invoice',$request->noinvoice)
                                ->update(['total_biaya' => $query]);
                }
                   

           return redirect('/tabelbiaya');
    }
    public function destroy($data,$noinvoice){
      
        Pembiayaan::destroy($data);

        $query = DB::table('pembelanjaans')
                                ->join('pembiayaans', 'pembelanjaans.id', '=', 'pembiayaans.pembelanjaan_id')
                                ->join('konsumens', 'konsumens.id', '=', 'pembiayaans.konsumen_id')
                                ->where('pembiayaans.no_invoice', '=',$noinvoice)
                                ->sum('pembelanjaans.harga');
        Pembayaran::where('no_invoice', $noinvoice)
                    ->update(['total_biaya' => $query]);

        return redirect('/tabelbiaya');


    }
    
}
