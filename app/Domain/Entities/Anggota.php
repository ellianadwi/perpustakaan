<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Anggota
 * @package App\Domain\Entities
 */
class Anggota extends Entities
{
    /**
     * @var string
     */
    protected $table = 'anggota';

    /**
     * @var array
     */
    protected $fillable = ['kode_anggota', 'nama_anggota', 'alamat_anggota', 'telp_anggota', 'kelas'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    public static $tags = 'anggota';
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