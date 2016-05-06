<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->truncate();

        DB::table('kelas')->insert([
            ['id' => 1, 'kelas' => '10','jurusan' => 'RPL 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'kelas' => '10','jurusan' => 'RPL 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'kelas' => '10','jurusan' => 'RPL 3','created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'kelas' => '10','jurusan' => 'EI 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'kelas' => '10','jurusan' => 'E1 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'kelas' => '10','jurusan' => 'TKJ 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 7, 'kelas' => '10','jurusan' => 'TKJ 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 8, 'kelas' => '10','jurusan' => 'TKR 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 9, 'kelas' => '10','jurusan' => 'TKR 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 10, 'kelas' => '11','jurusan' => 'RPL 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 11, 'kelas' => '11','jurusan' => 'RPL 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 12, 'kelas' => '11','jurusan' => 'RPL 3','created_at' => \Carbon\Carbon::now()],
            ['id' => 13, 'kelas' => '11','jurusan' => 'EI 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 14, 'kelas' => '11','jurusan' => 'E1 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 15, 'kelas' => '11','jurusan' => 'TKJ 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 16, 'kelas' => '11','jurusan' => 'TKJ 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 17, 'kelas' => '11','jurusan' => 'TKR 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 18, 'kelas' => '11','jurusan' => 'TKR 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 19, 'kelas' => '10','jurusan' => 'RPL 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 20, 'kelas' => '12','jurusan' => 'RPL 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 21, 'kelas' => '12','jurusan' => 'RPL 3','created_at' => \Carbon\Carbon::now()],
            ['id' => 22, 'kelas' => '12','jurusan' => 'EI 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 23, 'kelas' => '12','jurusan' => 'E1 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 24, 'kelas' => '12','jurusan' => 'TKJ 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 25, 'kelas' => '12','jurusan' => 'TKJ 2','created_at' => \Carbon\Carbon::now()],
            ['id' => 26, 'kelas' => '12','jurusan' => 'TKR 1','created_at' => \Carbon\Carbon::now()],
            ['id' => 27, 'kelas' => '12','jurusan' => 'TKR 2','created_at' => \Carbon\Carbon::now()],
        ]);
    }
}
