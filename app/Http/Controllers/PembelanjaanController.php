<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelanjaan;
class PembelanjaanController extends Controller
{
    public function datapembelanjaan(){
        return view('pembelanjaan',[
            "title" => "Data Pembelanjaan",
            "pembelanjaans" => Pembelanjaan::all()
           
        ]);
    }
}
