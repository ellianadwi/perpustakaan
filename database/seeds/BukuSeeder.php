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
            ['id' => 1, 'id_kategori' => '1', 'id_penerbit' => '', 'kode_buku' => '01','judul_buku' => 'Ayat-Ayat Cinta',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'id_kategori' => '1', 'id_penerbit' => '', 'kode_buku' => '02','judul_buku' => '99 Cahaya diLangit Eropa',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'id_kategori' => '1', 'id_penerbit' => '', 'kode_buku' => '03','judul_buku' => 'Siti Nurbaya',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'id_kategori' => '1', 'id_penerbit' => '', 'kode_buku' => '04','judul_buku' => 'Lupus',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'id_kategori' => '1', 'id_penerbit' => '', 'kode_buku' => '05','judul_buku' => 'Laskar Pelangi',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'id_kategori' => '2', 'id_penerbit' => '', 'kode_buku' => '06','judul_buku' => 'Naruto',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 7, 'id_kategori' => '2', 'id_penerbit' => '', 'kode_buku' => '07','judul_buku' => 'Faily Tail',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 8, 'id_kategori' => '2', 'id_penerbit' => '', 'kode_buku' => '08','judul_buku' => 'One Piece',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 9, 'id_kategori' => '2', 'id_penerbit' => '', 'kode_buku' => '09','judul_buku' => '',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 10, 'id_kategori' => '2', 'id_penerbit' => '', 'kode_buku' => '10','judul_buku' => '',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 11, 'id_kategori' => '3', 'id_penerbit' => '', 'kode_buku' => '11','judul_buku' => 'Putri Duyung',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 12, 'id_kategori' => '3', 'id_penerbit' => '', 'kode_buku' => '12','judul_buku' => 'Putri Salju',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 13, 'id_kategori' => '3', 'id_penerbit' => '', 'kode_buku' => '13','judul_buku' => 'Snow White',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 14, 'id_kategori' => '3', 'id_penerbit' => '', 'kode_buku' => '14','judul_buku' => 'Alice in Wonderland',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 15, 'id_kategori' => '3', 'id_penerbit' => '', 'kode_buku' => '15','judul_buku' => 'Kancil',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 16, 'id_kategori' => '4', 'id_penerbit' => '', 'kode_buku' => '16','judul_buku' => 'Ir. Soekarno',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 17, 'id_kategori' => '4', 'id_penerbit' => '', 'kode_buku' => '17','judul_buku' => 'Moh. Hatta',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 18, 'id_kategori' => '4', 'id_penerbit' => '', 'kode_buku' => '18','judul_buku' => 'Soeparman',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 19, 'id_kategori' => '4', 'id_penerbit' => '', 'kode_buku' => '19','judul_buku' => 'Jenderal Sudirman',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 20, 'id_kategori' => '4', 'id_penerbit' => '', 'kode_buku' => '20','judul_buku' => 'Budi utomo',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 21, 'id_kategori' => '5', 'id_penerbit' => '', 'kode_buku' => '21','judul_buku' => 'Kamus Jepang',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '5','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 22, 'id_kategori' => '5', 'id_penerbit' => '', 'kode_buku' => '22','judul_buku' => 'Kamus B. Indonesia',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '5','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 23, 'id_kategori' => '5', 'id_penerbit' => '', 'kode_buku' => '23','judul_buku' => 'Kamus B. Inggris',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '5','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 24, 'id_kategori' => '5', 'id_penerbit' => '', 'kode_buku' => '24','judul_buku' => 'Kamus B. Korea',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '5','status' => '0','created_at' => \Carbon\Carbon::now()],
            ['id' => 25, 'id_kategori' => '5', 'id_penerbit' => '', 'kode_buku' => '25','judul_buku' => 'Kamus B. Mandarin',
             'jumlah_buku' => '1', 'diskripsi_buku' => '', 'pengarang_buku' => 'Habibi',
             'tahun_terbit_buku' => '2004','rak' => '5','status' => '0','created_at' => \Carbon\Carbon::now()],
        ]);

    }
}
