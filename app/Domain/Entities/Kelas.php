<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Kelas
 * @package App\Domain\Entities
 */
class Kelas extends Entities
{
    /**
     * @var string
     */
    protected  $table = 'kelas';

    /**
     * @var array
     */
    protected $fillable = ['kelas', 'jurusan'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    public static $tags = 'kelas';

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
