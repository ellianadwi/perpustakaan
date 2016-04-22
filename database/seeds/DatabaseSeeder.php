<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(PetugasSeeder::class);
         $this->call(KategoriSeeder::class);
         $this->call(BukuSeeder::class);
         $this->call(AnggotaSeeder::class);
         $this->call(PeminjamanSeeder::class);
         $this->call(DetailPinjamSeeder::class);
    }
}
