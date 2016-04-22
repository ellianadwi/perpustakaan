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
            ['id' => 1, 'kode_kategori' => '01','nama_kategori' => 'Rizki Hari','created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'kode_kategori' => '02','nama_kategori' => 'Fira Avira','created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'kode_kategori' => '03','nama_kategori' => 'Melinia Casarida','created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'kode_kategori' => '04','nama_kategori' => 'Gigi Hani','created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'kode_kategori' => '05','nama_kategori' => 'Oktavia Maharani','created_at' => \Carbon\Carbon::now()],

        ]);
    }
}
