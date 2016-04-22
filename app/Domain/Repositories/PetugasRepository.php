<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 10:01
 */

namespace App\Domain\Repositories;

use App\Domain\Contracts\Cacheable;
use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\Petugas;
use App\Domain\Repositories\AbstractRepository;
use Illuminate\Support\Facades\Log;

class PetugasRepository extends AbstractRepository implements Paginable, Crudable
{

    protected $cache;

    public function __construct(Petugas $petugas, Cacheable $cache)
    {
        $this->model = $petugas;
        $this->cache = $cache;
    }

    public function find($id, array $columns = ['*'])
    {
        // set key
        $key = 'petugas-find' . $id;

        // has section and key
        if ($this->cache->has(Petugas::$tags, $key)) {
            return $this->cache->get(Petugas::$tags, $key);
        }
        // query to sql
        $petugas = parent::find($id, $columns);

        // store to cache
        $this->cache->put(Petugas::$tags, $key, $petugas, 10);
        return $petugas;
    }

    public function create(array $data)
    {
        try {
            $petugas = parent::create(
                [
                    'kode_petugas' => e($data['kode_petugas']),
                    'nama_petugas' => e($data['nama_petugas']),
                ]
            );
            // flush cache with tags
            $this->cache->flush(Petugas::$tags);
            return $petugas;
        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . PetugasRepository::class . ' method : create | ' . $e);
            return $this->createError();
        }
    }

    public function update($id, array $data)
    {
        try {
            $petugas = parent::update($id, [
                'kode_petugas' => e($data['kode_petugas']),
                'nama_petugas' => e($data['nama_petugas']),
            ]);

            // flush cache with tags
            $this->cache->flush(Petugas::$tags);

            return $petugas;

        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . PetugasRepository::class . ' method : update | ' . $e);
            return $this->createError();
        }
    }

    public function delete($id)
    {
        try {
            $petugas = parent::delete($id);
            // flush cache with tags
            $this->cache->flush(Petugas::$tags);
            return $petugas;
        } catch (\Exception $e) {
            // store errors to log

            Log::error('class : ' . PetugasRepository::class . ' method : delete | ' . $e);

            return $this->createError();
        }
    }


    public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // set key
        $key = 'petugas-get-by-page' . $limit . $page . $search;

        // has section and key
        if ($this->cache->has(Petugas::$tags, $key)) {
            return $this->cache->get(Petugas::$tags, $key);
        }

        // query to sql
        $petugas = parent::getByPage($limit, $page, $column, 'nama_petugas', $search);

        // store to cache
        $this->cache->put(Petugas::$tags, $key, $petugas, 10);

        return $petugas;
    }

    public function getData()
    {
        $data = $this->model
            ->get();
        return $data;
    }

//    public function getPageModal($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
//    {
//        // set key
//        $key = 'kecamatan-get-page-modal' . $limit . $page . $search;
//
//        // has section and key
//        if ($this->cache->has(Kecamatan::$tags, $key)) {
//            return $this->cache->get(Kecamatan::$tags, $key);
//        }
//
//        // query to sql
//        $organisasi = $this->model
//            ->Where('kecamatan', 'like', '%' . $search . '%')
//            ->WhereNotIn('id', function ($q) {
//                $q->select('kecamatan_id')->from('organisasi');
//            })
//            ->paginate($limit)
//            ->toArray();
//
//        // store to cache
//        $this->cache->put(Kecamatan::$tags, $key, $organisasi, 10);
//
//        return $organisasi;
//    }
}