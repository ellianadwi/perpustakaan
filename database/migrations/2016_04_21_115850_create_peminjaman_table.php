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
            $table->string('id_buku');
            $table->string('id_petugas');
            $table->string('id_anggota');
            $table->string('kode_peminjaman');
            $table->date('peminjam_tgl');
            $table->date('peminjam_tgl_kembali');
            $table->date('buku_tgl_kembali');
            $table->string('denda');
            $table->integer('status');
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