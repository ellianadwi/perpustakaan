<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->truncate();

        DB::table('kategori')->insert([
            ['id' => 1, 'kode_kategori' => '01','nama_kategori' => 'Novel','created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'kode_kategori' => '02','nama_kategori' => 'Komik','created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'kode_kategori' => '03','nama_kategori' => 'Dongeng','created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'kode_kategori' => '04','nama_kategori' => 'Biografi','created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'kode_kategori' => '05','nama_kategori' => 'Kamus','created_at' => \Carbon\Carbon::now()],

        ]);
    }
}
