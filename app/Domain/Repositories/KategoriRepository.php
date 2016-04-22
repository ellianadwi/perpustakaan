<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 13:08
 */

namespace App\Domain\Repositories;

use App\Domain\Contracts\Cacheable;
use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\Kategori;
use App\Domain\Repositories\AbstractRepository;
use Illuminate\Support\Facades\Log;

class KategoriRepository extends AbstractRepository implements Paginable, Crudable
{

    protected $cache;

    public function __construct(Kategori $kategori, Cacheable $cache)
    {
        $this->model = $kategori;
        $this->cache = $cache;
    }

    public function find($id, array $columns = ['*'])
    {
        // set key
        $key = 'kategori-find' . $id;

        // has section and key
        if ($this->cache->has(Kategori::$tags, $key)) {
            return $this->cache->get(Kategori::$tags, $key);
        }
        // query to sql
        $kategori = parent::find($id, $columns);

        // store to cache
        $this->cache->put(Kategori::$tags, $key, $kategori, 10);
        return $kategori;
    }

    public function create(array $data)
    {
        try {
            $kategori = parent::create(
                [
                    'kode_kategori' => e($data['kode_kategori']),
                    'nama_kategori' => e($data['nama_kategori']),
                ]
            );
            // flush cache with tags
            $this->cache->flush(Kategori::$tags);
            return $kategori;
        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . KategoriRepository::class . ' method : create | ' . $e);
            return $this->createError();
        }
    }

    public function update($id, array $data)
    {
        try {
            $kategori = parent::update($id, [
                'kode_kategori' => e($data['kode_kategori']),
                'nama_kategori' => e($data['nama_kategori']),
            ]);

            // flush cache with tags
            $this->cache->flush(Kategori::$tags);

            return $kategori;

        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . KategoriRepository::class . ' method : update | ' . $e);
            return $this->createError();
        }
    }

    public function delete($id)
    {
        try {
            $kategori = parent::delete($id);
            // flush cache with tags
            $this->cache->flush(Kategori::$tags);
            return $kategori;
        } catch (\Exception $e) {
            // store errors to log

            Log::error('class : ' . KategoriRepository::class . ' method : delete | ' . $e);

            return $this->createError();
        }
    }


    public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // set key
        $key = 'kategori-get-by-page' . $limit . $page . $search;

        // has section and key
        if ($this->cache->has(Kategori::$tags, $key)) {
            return $this->cache->get(Kategori::$tags, $key);
        }

        // query to sql
        $kategori = parent::getByPage($limit, $page, $column, 'nama_kategori', $search);

        // store to cache
        $this->cache->put(Kategori::$tags, $key, $kategori, 10);

        return $kategori;
    }

    public function getData()
    {
        $data = $this->model
            ->get();
        return $data;
    }
}