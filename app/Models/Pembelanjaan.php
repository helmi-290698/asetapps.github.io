<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelanjaan extends Model
{
    use HasFactory;
    protected $guarded= ['id'];
    public function pembiayaan(){
        return $this->hasMany(Pembiayaan::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
