<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 15:03
 */

namespace App\Domain\Repositories;

use App\Domain\Contracts\Cacheable;
use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\Anggota;
use App\Domain\Repositories\AbstractRepository;
use Illuminate\Support\Facades\Log;

class AnggotaRepository extends AbstractRepository implements Paginable, Crudable
{

    protected $cache;

    public function __construct(Anggota $anggota, Cacheable $cache)
    {
        $this->model = $anggota;
        $this->cache = $cache;
    }

    public function find($id, array $columns = ['*'])
    {
        // set key
        $key = 'anggota-find' . $id;

        // has section and key
        if ($this->cache->has(Anggota::$tags, $key)) {
            return $this->cache->get(Anggota::$tags, $key);
        }
        // query to sql
        $anggota = parent::find($id, $columns);

        // store to cache
        $this->cache->put(Anggota::$tags, $key, $anggota, 10);
        return $anggota;
    }

    public function create(array $data)
    {
        try {
            $anggota = parent::create(
                [
                    'kode_anggota'   => e($data['kode_anggota']),
                    'nama_anggota'   => e($data['nama_anggota']),
                    'alamat_anggota' => e($data['alamat_anggota']),
                    'telp_anggota'   => e($data['telp_anggota']),
                    'id_kelas'       => e($data['id_kelas']),
                ]
            );
            // flush cache with tags
            $this->cache->flush(Anggota::$tags);
            return $anggota;
        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . AnggotaRepository::class . ' method : create | ' . $e);
            return $this->createError();
        }
    }

    public function update($id, array $data)
    {
        try {
            $anggota = parent::update($id, [
                'kode_anggota'   => e($data['kode_anggota']),
                'nama_anggota'   => e($data['nama_anggota']),
                'alamat_anggota' => e($data['alamat_anggota']),
                'telp_anggota'   => e($data['telp_anggota']),
                'id_kelas'       => e($data['id_kelas']),
            ]);

            // flush cache with tags
            $this->cache->flush(Anggota::$tags);

            return $anggota;

        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . AnggotaRepository::class . ' method : update | ' . $e);
            return $this->createError();
        }
    }

    public function delete($id)
    {
        try {
            $anggota = parent::delete($id);
            // flush cache with tags
            $this->cache->flush(Anggota::$tags);
            return $anggota;
        } catch (\Exception $e) {
            // store errors to log

            Log::error('class : ' . AnggotaRepository::class . ' method : delete | ' . $e);

            return $this->createError();
        }
    }


    public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // set key
        $key = 'anggota-get-by-page-' . $limit . $page . $search;

        // has section and key
        if ($this->cache->has(Anggota::$tags, $key)) {
            return $this->cache->get(Anggota::$tags, $key);
        }

        // query to sql
        $anggota = parent::getByPage($limit, $page, $column, 'nama_anggota', $search);
//        $anggota = $this->model->get();
        // store to cache
        $this->cache->put(Anggota::$tags, $key, $anggota, 10);

        return $anggota;
    }

    public function getData()
    {
        $data = $this->model
            ->get();
        return $data;
    }

    public function getPageList1()
    {
        $data = $this->model
            ->where('kelas', 'like', '%10%')
            ->get();
        return $data;
    }

    public function getPageList2()
    {
        $data = $this->model
            ->where('kelas', 'like', '%11%')
            ->get();
        return $data;
    }

    public function getPageList3()
    {
        $data = $this->model
            ->where('kelas', 'like', '%12%')
            ->get();
        return $data;
    }

    public function getListByKelas($kelas)
    {
//        if ($kelas == 10) {
//            $data = $this->model
//                ->where('id_kelas', 'like', '%10%')
//                ->get();
//        }
//        if ($kelas == 11) {
//            $data = $this->model
//                ->where('id_kelas', 'like', '%11%')
//                ->get();
//        }
//        if ($kelas == 12) {
//            $data = $this->model
//                ->where('id_kelas', 'like', '%12%')
//                ->get();
//        }

        $data = $this->model
            ->where('id_kelas', $kelas)
            ->get();

        return $data;
    }
}