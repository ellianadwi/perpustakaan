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
             'id_kelas' => '1','created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'id_kelas' => '14','created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'id_kelas' => '18','created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'id_kelas' => '27','created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'id_kelas' => '24','created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'id_kelas' => '7','created_at' => \Carbon\Carbon::now()],

        ]);
    }
}
