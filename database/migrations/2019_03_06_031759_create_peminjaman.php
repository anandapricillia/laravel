<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_film');
            $table->string('nama_peminjam');
            $table->integer('no_ktp');
            $table->string('foto_ktp');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->string('harga_sewa');
            $table->string('status');
            $table->date('tanggal_input_data');
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
        Schema::dropIfExists('peminjaman');
    }
}
