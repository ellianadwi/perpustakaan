<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 14:24
 */

namespace App\Domain\Repositories;

use App\Domain\Contracts\Cacheable;
use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\Buku;
use App\Domain\Repositories\AbstractRepository;
use Illuminate\Support\Facades\Log;

class BukuRepository extends AbstractRepository implements Paginable, Crudable
{

    protected $cache;

    public function __construct(Buku $buku, Cacheable $cache)
    {
        $this->model = $buku;
        $this->cache = $cache;
    }

    public function find($id, array $columns = ['*'])
    {
        // set key
        $key = 'buku-find' . $id;

        // has section and key
        if ($this->cache->has(Buku::$tags, $key)) {
            return $this->cache->get(Buku::$tags, $key);
        }
        // query to sql
        $buku = parent::find($id, $columns);

        // store to cache
        $this->cache->put(Buku::$tags, $key, $buku, 10);
        return $buku;
    }

    public function create(array $data)
    {
        try {
            $buku = parent::create(
                [
                    'id_kategori'       => e($data['id_kategori']),
//                    'id_penerbit'       => e($data['id_penerbit']),
                    'kode_buku'         => e($data['kode_buku']),
                    'judul_buku'        => e($data['judul_buku']),
                    'jumlah_buku'       => e($data['jumlah_buku']),
                    'diskripsi_buku'    => e($data['diskripsi_buku']),
                    'pengarang_buku'    => e($data['pengarang_buku']),
                    'tahun_terbit_buku' => e($data['tahun_terbit_buku']),
                ]
            );
            // flush cache with tags
            $this->cache->flush(Buku::$tags);
            return $buku;
        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . BukuRepository::class . ' method : create | ' . $e);
            return $this->createError();
        }
    }

    public function update($id, array $data)
    {
        try {
            $buku = parent::update($id, [
                'id_kategori'       => e($data['id_kategori']),
//                'id_penerbit'       => e($data['id_penerbit']),
                'kode_buku'         => e($data['kode_buku']),
                'judul_buku'        => e($data['judul_buku']),
                'jumlah_buku'       => e($data['jumlah_buku']),
                'diskripsi_buku'    => e($data['diskripsi_buku']),
                'pengarang_buku'    => e($data['pengarang_buku']),
                'tahun_terbit_buku' => e($data['tahun_terbit_buku']),
            ]);

            // flush cache with tags
            $this->cache->flush(Buku::$tags);

            return $buku;

        } catch (\Exception $e) {
            // store errors to log
            Log::error('class : ' . BukuRepository::class . ' method : update | ' . $e);
            return $this->createError();
        }
    }

    public function delete($id)
    {
        try {
            $buku = parent::delete($id);
            // flush cache with tags
            $this->cache->flush(Buku::$tags);
            return $buku;
        } catch (\Exception $e) {
            // store errors to log

            Log::error('class : ' . BukuRepository::class . ' method : delete | ' . $e);

            return $this->createError();
        }
    }


    public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // set key
        $key = 'buku-get-by-page' . $limit . $page . $search;

        // has section and key
        if ($this->cache->has(Buku::$tags, $key)) {
            return $this->cache->get(Buku::$tags, $key);
        }

        // query to sql
        $buku = parent::getByPage($limit, $page, $column, 'judul_buku', $search);

        // store to cache
        $this->cache->put(Buku::$tags, $key, $buku, 10);

        return $buku;
    }

    public function getData()
    {
        $data = $this->model
            ->get();
        return $data;
    }

    public function getListByKategori($kategori)
    {
        $data = $this->model
            ->where('id_kategori', $kategori)
            ->get();

        return $data;
    }
}