<?php

use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->truncate();

        DB::table('buku')->insert([
            ['id' => 1, 'id_kategori' => '1', 'id_penerbit' => '1', 'kode_buku' => '01','judul_buku' => 'B.Indonesia',
             'jumlah_buku' => '1', 'diskripsi_buku' => 'Mengandung pembahasan pelajaran bahasa indonesia ', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','status' => '0','created_at' => \Carbon\Carbon::now()],

        ]);

    }
}
