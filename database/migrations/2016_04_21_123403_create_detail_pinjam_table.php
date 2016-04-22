<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPinjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pinjam', function (Blueprint $table) {
            $table->string('id',50);
            $table->string('id_peminjaman');
            $table->string('id_buku');
            $table->string('detail_tgl_kembali');
            $table->string('detail_denda');
            $table->string('detail_status_kembali');
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
        Schema::drop('detail_pinjam');
    }

}
