<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 19:10
 */

namespace App\Domain\Repositories;

use App\Domain\Contracts\Cacheable;
use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\Peminjaman;
use App\Domain\Repositories\AbstractRepository;
use Illuminate\Support\Facades\Log;

class PeminjamanRepository extends AbstractRepository implements Paginable, Crudable
{

    protected $cache;

    public function __construct(Peminjaman $peminjaman, Cacheable $cache)
    {
        $this->model = $peminjaman;
        $this->cache = $cache;
    }

    public function find($id, array $columns = ['*'])
    {
        // set key
        $key = 'peminjaman-find' . $id;

        // has section and key
        if ($this->cache->has(Peminjaman::$tags, $key)) {
            return $this->cache->get(Peminjaman::$tags, $key);
        }
        // query to sql
        $peminjaman = parent::find($id, $columns);

        // store to cache
        $this->cache->put(Peminjaman::$tags, $key, $peminjaman, 10);
        return $peminjaman;
    }

    public function create(array $data)
    {
        try {
            $peminjaman = parent::create(
                [
                    'id_petugas'           => e($data['id_petugas']),
                    'id_anggota'           => e($data['id_anggota']),
                    'kode_peminjaman'      => e($data['kode_peminjaman']),
                    'peminjam_tgl'         => e($data['peminjam_tgl']),
                    'peminjam_tgl_kembali' => e($data['peminjam_tgl_kembali']),
                ]
            );
            // flush cache with tags
            $this->cache->flush(Peminjaman::$tags);
            return $peminjaman;
        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . PeminjamanRepository::class . ' method : create | ' . $e);
            return $this->createError();
        }
    }

    public function update($id, array $data)
    {
        try {
            $peminjaman = parent::update($id, [
                'id_petugas'           => e($data['id_petugas']),
                'id_anggota'           => e($data['id_anggota']),
                'kode_peminjaman'      => e($data['kode_peminjaman']),
                'peminjam_tgl'         => e($data['peminjam_tgl']),
                'peminjam_tgl_kembali' => e($data['peminjam_tgl_kembali']),
            ]);

            // flush cache with tags
            $this->cache->flush(Peminjaman::$tags);

            return $peminjaman;

        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . PeminjamanRepository::class . ' method : update | ' . $e);
            return $this->createError();
        }
    }

    public function delete($id)
    {
        try {
            $peminjaman = parent::delete($id);
            // flush cache with tags
            $this->cache->flush(Peminjaman::$tags);
            return $peminjaman;
        } catch (\Exception $e) {
            // store errors to log

            Log::error('class : ' . PeminjamanRepository::class . ' method : delete | ' . $e);

            return $this->createError();
        }
    }


    public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // set key
        $key = 'peminjaman-get-by-page' . $limit . $page . $search;

        // has section and key
        if ($this->cache->has(Peminjaman::$tags, $key)) {
            return $this->cache->get(Peminjaman::$tags, $key);
        }

        // query to sql
        $peminjaman = parent::getByPage($limit, $page, $column, 'peminjam_tgl', $search);

        // store to cache
        $this->cache->put(Peminjaman::$tags, $key, $peminjaman, 10);

        return $peminjaman;
    }

    public function getData()
    {
        $data = $this->model
            ->get();
        return $data;
    }
}