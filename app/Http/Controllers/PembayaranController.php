<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Konsumen;
use App\Models\Pembayaran;
use App\Models\Pembelanjaan;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        return view('pembayaran',[
            "title" => "Data Pembayaran",
            
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

        dd($request);

    }
}
