<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;
    protected $guarded= ['id'];
    
    public function lembaga(){

        return $this->belongsTo(Lembaga::class);

    }
    public function pembiayaan(){
        return $this->hasMany(Pembiayaan::class);
    }
}
