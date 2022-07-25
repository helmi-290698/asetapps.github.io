<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Konsumen;
use App\Models\Pembayaran;
use App\Models\Pembelanjaan;
use App\Models\Pembiayaan;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PembayaranController extends Controller
{
    
    public function index(){
        $pembayaran = Pembayaran::all();
   
        return view('pembayaran',[
            "title" => "Data Pembiayaan",
            "pembayarans" => $pembayaran 
            
        ]);
    }
    public function invoice($id){
       
  
       $data = Pembayaran::with('pembiayaan.pembelanjaan','pembiayaan.konsumen','pembiayaan.konsumen.lembaga')->where('id',$id)->get();
        foreach($data as $hasil){

        }
    $invoice = Pembiayaan::with('pembelanjaan')->where('no_invoice',$hasil->no_invoice)->get();
    
        return view('invoice',[
            "title" => "Data Pembiayaan",
            "invoices" => $hasil,
            "biaya" => $invoice,
            
        ]);
    }
    public function getPembayaranId($id){

        $query=Pembayaran::where('id',$id)->first();

        return response()->json(['pembayaran' =>$query]);

    }
    public function bayarInvoice(Request $request,$id){
        Pembayaran::where('id',$id)->update(['jumlah_bayar' => $request->jumlah_bayar]);
        return redirect('/tabelpembayaran');

    }


}
