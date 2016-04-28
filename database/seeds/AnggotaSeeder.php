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
             'kelas' => '10 RPL 3','created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'kelas' => '11 RPL 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'kelas' => '12 RPL 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'kelas' => '11 RPL 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'kelas' => '12 RPL 3','created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'kode_anggota' => '01', 'nama_anggota' => 'Dinda Permata', 'alamat_anggota' => 'Malang','telp_anggota' => '087654765456',
             'kelas' => '10 RPL 2','created_at' => \Carbon\Carbon::now()],

        ]);
    }
}
