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
            $table->id('id_pembelanjaan');
            $table->foreignId('id_categories');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->string('merek');
            $table->integer('jumlah');
            $table->string('tgl_pembelian');
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
