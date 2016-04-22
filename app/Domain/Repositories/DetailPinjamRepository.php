<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 19:43
 */

namespace App\Domain\Repositories;

use App\Domain\Contracts\Cacheable;
use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\DetailPinjam;
use App\Domain\Repositories\AbstractRepository;
use Illuminate\Support\Facades\Log;

class DetailPinjamRepository extends AbstractRepository implements Paginable, Crudable
{

    protected $cache;

    public function __construct(DetailPinjam $detail_pinjam, Cacheable $cache)
    {
        $this->model = $detail_pinjam;
        $this->cache = $cache;
    }

    public function find($id, array $columns = ['*'])
    {
        // set key
        $key = 'detail_pinjam-find' . $id;

        // has section and key
        if ($this->cache->has(DetailPinjam::$tags, $key)) {
            return $this->cache->get(DetailPinjam::$tags, $key);
        }
        // query to sql
        $detail_pinjam = parent::find($id, $columns);

        // store to cache
        $this->cache->put(DetailPinjam::$tags, $key, $detail_pinjam, 10);
        return $detail_pinjam;
    }

    public function create(array $data)
    {
        try {
            $detail_pinjam = parent::create(
                [
                    'id_peminjaman'         => e($data['id_peminjaman']),
                    'id_buku'               => e($data['id_buku']),
                    'detail_tgl_kembali'    => e($data['detail_tgl_kembali']),
                    'detail_denda'          => e($data['detail_denda']),
                    'detail_status_kembali' => e($data['detail_status_kembali']),
                ]
            );
            // flush cache with tags
            $this->cache->flush(DetailPinjam::$tags);
            return $detail_pinjam;
        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . DetailPinjamRepository::class . ' method : create | ' . $e);
            return $this->createError();
        }
    }

    public function update($id, array $data)
    {
        try {
            $detail_pinjam = parent::update($id, [
                'id_peminjaman'         => e($data['id_peminjaman']),
                'id_buku'               => e($data['id_buku']),
                'detail_tgl_kembali'    => e($data['detail_tgl_kembali']),
                'detail_denda'          => e($data['detail_denda']),
                'detail_status_kembali' => e($data['detail_status_kembali']),
            ]);

            // flush cache with tags
            $this->cache->flush(DetailPinjam::$tags);

            return $detail_pinjam;

        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . DetailPinjamRepository::class . ' method : update | ' . $e);
            return $this->createError();
        }
    }

    public function delete($id)
    {
        try {
            $detail_pinjam = parent::delete($id);
            // flush cache with tags
            $this->cache->flush(DetailPinjam::$tags);
            return $detail_pinjam;
        } catch (\Exception $e) {
            // store errors to log

            Log::error('class : ' . DetailPinjamRepository::class . ' method : delete | ' . $e);

            return $this->createError();
        }
    }


    public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // set key
        $key = 'detail_pinjam-get-by-page' . $limit . $page . $search;

        // has section and key
        if ($this->cache->has(DetailPinjam::$tags, $key)) {
            return $this->cache->get(DetailPinjam::$tags, $key);
        }

        // query to sql
        $detail_pinjam = parent::getByPage($limit, $page, $column, 'detail_denda', $search);

        // store to cache
        $this->cache->put(DetailPinjam::$tags, $key, $detail_pinjam, 10);

        return $detail_pinjam;
    }

    public function getData()
    {
        $data = $this->model
            ->get();
        return $data;
    }
}