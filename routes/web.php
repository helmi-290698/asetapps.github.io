<?php

use App\Models\Type;
use App\Models\Barang;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\CrapIndex;
use App\Http\Controllers\CrudbarangController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PembelanjaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return redirect('/login');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/home', [BarangController::class,'All_barang'])->middleware('auth');
Route::get('/fisik', [BarangController::class, 'data_fisik'])->middleware('auth');
Route::get('/tambah/category',function(){
    return view('inputcategori',[
        "title" =>"Tambah Category"
    ]);
})->middleware('auth');
Route::get('/virtual', [BarangController::class,'data_virtual'])->middleware('auth');
Route::get('/tambahfisik',[BarangController::class,'tambahfisikform'])->middleware('auth');
Route::post('/tambahfisik',[BarangController::class,'store'])->middleware('auth');
Route::get('/tambahvirtual',[BarangController::class,'tambahvirtualform'])->middleware('auth');
Route::post('/tambahvirtual',[BarangController::class,'store_virtual'])->middleware('auth');
Route::get('/category',[CategoryController::class,'index'])->middleware('auth');
Route::post('/tambahcategory',[CategoryController::class,'store'])->middleware('auth');
Route::get('/user',[UserController::class,'index'])->middleware('auth');
Route::get('/user/tambahuser',[UserController::class,'tambah_user'])->middleware('auth');
Route::post('/user/tambahuser',[RegisterController::class,'store']);
Route::get('/testing',[BarangController::class,'tes']);
Route::get('/status',[StatusController::class,'index'])->middleware('auth');
Route::post('/tambahstatus',[StatusController::class,'store']);
Route::get('/tambahfisik/checkSlug',[BarangController::class,'checkSlug'])->middleware('auth');
Route::get('/tambahstatus/checkSlug',[StatusController::class,'checkSlug'])->middleware('auth');
Route::get('/tambahkategori/checkSlug',[CategoryController::class,'checkSlug'])->middleware('auth');
Route::get('/pembelanjaan',[PembelanjaanController::class,'datapembelanjaan'])->middleware('auth');
Route::get('/lembaga',[LembagaController::class,'index'])->middleware('auth');
Route::post('/tambahlembaga',[LembagaController::class,'store'])->middleware('auth');
Route::get('/konsumen',[KonsumenController::class,'index'])->middleware('auth');
Route::get('/tambahpembayaran',[PembayaranController::class,'tambah_pembayaran'])->middleware('auth');
Route::get('/tabelpembayaran',[PembayaranController::class,'index'])->middleware('auth');




