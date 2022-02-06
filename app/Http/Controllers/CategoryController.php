<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;
class CategoryController extends Controller
{
    public function index(){
        return view('Category',[
            "title" => "Data Category",
            "categories" => Category::all(),
            "jumlahkategori" => Category::all()->count(),
            "jumlahfisik" => Category::all()->where('nama_type','Fisik')->count(),
            "jumlahvirtual" => Category::all()->where('nama_type','Virtual')->count()
        ]);
    }
    
    public function all_category(){
        return view('home',[
            "title" => "Category",
            "categories" => Category::all(),
            
        ]);
    } 
    public function tambah_category(){
        return view ('form.inputcategori',[
            "title" => "tambah Category"
        ]);
    }
    public function store(Request $request){
        $datapost = $request->validate([
            'kategori' =>'required',
            'slug' => 'required|unique:categories',
            'namatype' => 'required',
            

        ]);

        Category::create([
            'nama_kategory' => $request->kategori,
            'slug' => $request->slug,
            'nama_type' => $request->namatype,
            
            
        ]);

        

       return redirect('/category');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Category::class, 'slug', $request->kategori);
        return response()->json(['slug' => $slug]);

   }
    
}
