<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Entities
{

    /**
     * @var string
     */
    protected  $table = 'kategori';

    /**
     * @var array
     */
    protected $fillable = ['kode_kategori', 'nama_kategori'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    public static $tags = 'kategori';

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