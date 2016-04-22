<?php

use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota')->truncate();

        DB::table('anggota')->insert([
            ['id' => 1, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'kelas' => 'X','created_at' => \Carbon\Carbon::now()],

        ]);
    }
}
