<?php

use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peminjaman')->truncate();
        DB::table('peminjaman')->insert([
            ['id' => 1, 'id_buku' => '1','id_petugas' => '1', 'id_anggota' => '1', 'kode_peminjaman' => '01','peminjam_tgl' => '2016-04-29',
             'peminjam_tgl_kembali' => '2016-05-10', 'buku_tgl_kembali' => '2016-05-15','status' => '1','created_at' => \Carbon\Carbon::now()],

        ]);
    }
}
