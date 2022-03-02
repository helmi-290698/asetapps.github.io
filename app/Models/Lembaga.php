<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    use HasFactory;
    protected $guarded = ['id_lembaga'];
    public function konsumen(){
        return $this->hasMany(Konsumen::class);
    }
   
}
