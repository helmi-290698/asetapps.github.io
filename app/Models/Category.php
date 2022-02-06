<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory,Sluggable;
    protected $guarded = ['id'];
    
    public function barang(){
        return $this->hasMany(Barang::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [ 
                'source' => 'nama_kategory'
            ]
        ];
    }
    
}
