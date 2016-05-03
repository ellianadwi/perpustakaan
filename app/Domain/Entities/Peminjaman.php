<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Peminjaman
 * @package App\Domain\Entities
 */
class Peminjaman extends Entities
{
    /**
     * @var string
     */
    protected $table = 'peminjaman';

    /**
     * @var array
     */
    protected $fillable = ['id_buku','id_petugas', 'id_anggota', 'kode_peminjaman', 'peminjam_tgl',
        'peminjam_tgl_kembali','buku_tgl_kembali','denda','status'];
    protected $with = ['buku','petugas','anggota'];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    public static $tags = 'peminjaman';
    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'user_creator',
        'user_updater',
    ];
    public function buku()
    {
        return $this->belongsTo('App\Domain\Entities\Buku', 'id_buku');
    }
    public function petugas()
    {
        return $this->belongsTo('App\Domain\Entities\Petugas', 'id_petugas');
    }
    public function anggota()
    {
        return $this->belongsTo('App\Domain\Entities\Anggota', 'id_anggota');
    }
}
