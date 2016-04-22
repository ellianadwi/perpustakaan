<?php

use Illuminate\Database\Seeder;

class DetailPinjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_pinjam')->truncate();

        DB::table('detail_pinjam')->insert([
            ['id' => 1, 'id_peminjaman' => '1', 'id_buku' => '1', 'detail_tgl_kembali' => '02-03-2000','detail_denda' => '1000',
             'detail_status_kembali' => 'Tersedia','created_at' => \Carbon\Carbon::now()],

        ]);
    }
}
