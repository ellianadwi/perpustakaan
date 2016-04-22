<?php
namespace App\Domain\Entities;

/**
 * Class Buku
 * @package App\Domain\Entities
 */
class Buku extends Entities
{

    /**
     * @var string
     */
    protected $table = 'buku';

    /**
     * @var array
     */
    protected $fillable = ['id_kategori', 'id_penerbit', 'kode_buku', 'judul_buku', 'jumlah_buku',
        'diskripsi_buku','pengarang_buku', 'tahun_terbit_buku'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    public static $tags = 'buku';
    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'user_creator',
        'user_updater',
    ];

}