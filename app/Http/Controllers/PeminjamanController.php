<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 19:20
 */

namespace App\Http\Controllers;

use App\Domain\Entities\Peminjaman;
use App\Domain\Repositories\PeminjamanRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\PeminjamanRequest;
use Illuminate\Http\Request;
use App\Http\Requests;

class PeminjamanController extends Controller
{

    protected $peminjaman;

    public function __construct(PeminjamanRepository $peminjaman)
    {
        $this->peminjaman = $peminjaman;
    }

    public function index(Request $request)
    {
        return $this->peminjaman->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function store(PeminjamanRequest $request)
    {
        return $this->peminjaman->create($request->all());
    }

    public function show($id)
    {
        return $this->peminjaman->find($id);
    }

    public function update(PeminjamanRequest $request, $id)
    {
        return $this->peminjaman->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->peminjaman->delete($id);
    }

    public function getData($limit = 10)
    {
        return $this->peminjaman->getData();
    }
}