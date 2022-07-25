<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembiayaan extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function pembelanjaan(){
        return $this->belongsTo(Pembelanjaan::class);
    }
    public function jasa(){
        return $this->belongsTo(Jasa::class);
    }
    public function konsumen(){
        return $this->belongsTo(Konsumen::class);
    }
    public function pembayaran(){
        return $this->hasMany(Pembayaran::class);
    }
}
