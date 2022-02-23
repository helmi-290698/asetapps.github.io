<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
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
            "title" => "Tambah pembayaran"
        ]);
    }
}
