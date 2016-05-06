<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 15:11
 */

namespace App\Http\Controllers;

use App\Domain\Entities\Anggota;
use App\Domain\Repositories\AnggotaRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnggotaRequest;
use Illuminate\Http\Request;
use App\Http\Requests;

class AnggotaController extends Controller
{

    protected $anggota;

    public function __construct(AnggotaRepository $anggota)
    {
        $this->middleware('auth');
        $this->anggota = $anggota;

    }

    public function index(Request $request)
    {
        return $this->anggota->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function store(AnggotaRequest $request)
    {
        return $this->anggota->create($request->all());
    }

    public function show($id)
    {
        return $this->anggota->find($id);
    }

    public function update(AnggotaRequest $request, $id)
    {
        return $this->anggota->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->anggota->delete($id);
    }

    public function getData()
    {
        return $this->anggota->getData();
    }

    public function getPageList1(Request $request)
    {
        return $this->anggota->getPageList1(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function getPageList2(Request $request)
    {
        return $this->anggota->getPageList2(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function getPageList3(Request $request)
    {
        return $this->anggota->getPageList3(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function getListByKelas($kelas)
    {
        return $this->anggota->getListByKelas($kelas);
    }

}