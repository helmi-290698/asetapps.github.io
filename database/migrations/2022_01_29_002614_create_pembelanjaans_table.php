<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelanjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelanjaans', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe_biaya',['Barang','Jasa']);
            $table->foreignId('category_id')->nullable();
            $table->string('nama_barang');
            $table->integer('harga');
            $table->string('merek')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('tgl_pembelian')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelanjaans');
    }
}
