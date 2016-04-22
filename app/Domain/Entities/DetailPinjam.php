<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetaiPinjam
 * @package App\Domain\Entities
 */
class DetailPinjam extends Entities
{
    /**
     * @var string
     */
    protected $table = 'detail_pinjam';

    /**
     * @var array
     */
    protected $fillable = ['id_peminjaman', 'id_buku', 'detail_tgl_kembali', 'detail_denda',
        'detail_status_kembali'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    public static $tags = 'detail_pinjam';
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