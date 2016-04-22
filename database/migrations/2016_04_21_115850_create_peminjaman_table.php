<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->string('id', 50);
            $table->string('id_petugas');
            $table->string('id_anggota');
            $table->string('kode_peminjaman');
            $table->string('peminjam_tgl');
            $table->string('peminjam_tgl_kembali');
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peminjaman');
    }
}