<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 13:18
 */

namespace App\Http\Controllers;

use App\Domain\Entities\Kategori;
use App\Domain\Repositories\KategoriRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use Illuminate\Http\Request;
use App\Http\Requests;

class KategoriController extends Controller
{

    protected $kategori;

    public function __construct(KategoriRepository $kategori)
    {

        $this->middleware('auth');
        $this->kategori = $kategori;
    }

    public function index(Request $request)
    {
        return $this->kategori->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function store(KategoriRequest $request)
    {
        return $this->kategori->create($request->all());
    }

    public function show($id)
    {
        return $this->kategori->find($id);
    }

    public function update(KategoriRequest $request, $id)
    {
        return $this->kategori->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->kategori->delete($id);
    }

    public function getData($limit = 10)
    {
        return $this->kategori->getData();
    }
}