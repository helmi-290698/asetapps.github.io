<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Status extends Model
{
    use HasFactory,sluggable;

    protected $guarded = ['id'];
    public function type(){
        
        return $this->hasMany(Type::class);

         
    }
    public function barang(){
        return $this->hasMany(Barang::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_status'
            ]
        ];
    }
}
