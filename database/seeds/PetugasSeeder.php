<?php

use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->truncate();

        DB::table('petugas')->insert([
                ['id' => 1, 'kode_petugas' => '01','nama_petugas' => 'Erni Agustini','email' => 'Erni@gmail.com','password' => 'qwerty','created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'kode_petugas' => '02','nama_petugas' => 'Dina Oktavia','email' => 'Dina@gmail.com','password' => 'qwerty','created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'kode_petugas' => '03','nama_petugas' => 'Erna Agustina','email' => 'Erna@gmail.com','password' => 'qwerty','created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'kode_petugas' => '04','nama_petugas' => 'Lukman Haris','email' => 'Lukman@gmail.com','password' => 'qwerty','created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'kode_petugas' => '05','nama_petugas' => 'Sofia Izza','email' => 'Sofia@gmail.com','password' => 'qwerty','created_at' => \Carbon\Carbon::now()],

        ]);
    }
}
