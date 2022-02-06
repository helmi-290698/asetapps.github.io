<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('status_id');
            $table->string('nama_barang');
            $table->string('kode_barang');
            $table->string('slug');
            $table->string('merk');
            $table->string('link_aset')->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('jumlah');
            $table->string('foto')->nullable();
            $table->string('nominal_tagihan')->nullable();
            $table->string('periode_tagihan')->nullable();
            $table->string('tgl_expired')->nullable();
            $table->string('password')->nullable();
            $table->string('username_email')->nullable();
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
        Schema::dropIfExists('barangs');
    }
}
