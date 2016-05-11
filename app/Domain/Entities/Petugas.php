<?php

namespace App\Domain\Entities;

/**
 * Class Petugas
 * @package App\Domain\Entities
 */
class Petugas extends Entities
{

    /**
     * @var string
     */
    protected  $table = 'petugas';

    /**
     * @var array
     */
    protected $fillable = ['kode_petugas', 'nama_petugas','email','password'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    public static $tags = 'petugas';

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'user_creator',
        'user_updater'
    ];

}

