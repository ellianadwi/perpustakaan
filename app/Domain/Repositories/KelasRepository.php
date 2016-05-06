<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 03/05/2016
 * Time: 13:02
 */

namespace App\Domain\Repositories;

use App\Domain\Contracts\Cacheable;
use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\Kelas;
use App\Domain\Repositories\AbstractRepository;
use Illuminate\Support\Facades\Log;

class KelasRepository extends AbstractRepository implements Paginable, Crudable
{

    protected $cache;

    public function __construct(Kelas $kelas, Cacheable $cache)
    {
        $this->model = $kelas;
        $this->cache = $cache;
    }

    public function find($id, array $columns = ['*'])
    {
        // set key
        $key = 'kelas-find' . $id;

        // has section and key
        if ($this->cache->has(Kelas::$tags, $key)) {
            return $this->cache->get(Kelas::$tags, $key);
        }
        // query to sql
        $kelas = parent::find($id, $columns);

        // store to cache
        $this->cache->put(Kelas::$tags, $key, $kelas, 10);
        return $kelas;
    }

    public function create(array $data)
    {
        try {
            $kelas = parent::create(
                [
                    'kelas' => e($data['kelas']),
                    'jurusan' => e($data['jurusan']),
                ]
            );
            // flush cache with tags
            $this->cache->flush(Kelas::$tags);
            return $kelas;
        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . KelasRepository::class . ' method : create | ' . $e);
            return $this->createError();
        }
    }

    public function update($id, array $data)
    {
        try {
            $kelas = parent::update($id, [
                'kelas' => e($data['kelas']),
                'jurusan' => e($data['jurusan']),
            ]);

            // flush cache with tags
            $this->cache->flush(Kelas::$tags);

            return $kelas;

        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . KelasRepository::class . ' method : update | ' . $e);
            return $this->createError();
        }
    }

    public function delete($id)
    {
        try {
            $kelas = parent::delete($id);
            // flush cache with tags
            $this->cache->flush(Kelas::$tags);
            return $kelas;
        } catch (\Exception $e) {
            // store errors to log

            Log::error('class : ' . KelasRepository::class . ' method : delete | ' . $e);

            return $this->createError();
        }
    }


    public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // set key
        $key = 'kelas-get-by-page' . $limit . $page . $search;

        // has section and key
        if ($this->cache->has(Kelas::$tags, $key)) {
            return $this->cache->get(Kelas::$tags, $key);
        }

        // query to sql
        $kelas = parent::getByPage($limit, $page, $column, 'kelas', $search);

        // store to cache
        $this->cache->put(Kelas::$tags, $key, $kelas, 10);

        return $kelas;
    }

    public function getData()
    {
        $data = $this->model
            ->get();
        return $data;
    }
}