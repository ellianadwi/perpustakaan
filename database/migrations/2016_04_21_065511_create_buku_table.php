<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->string('id',50);
            $table->string('id_kategori');
            $table->string('id_penerbit');
            $table->string('kode_buku');
            $table->string('judul_buku');
            $table->integer('jumlah_buku');
            $table->string('diskripsi_buku');
            $table->string('pengarang_buku');
            $table->integer('tahun_terbit_buku');
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
        Schema::drop('buku');
    }
}
