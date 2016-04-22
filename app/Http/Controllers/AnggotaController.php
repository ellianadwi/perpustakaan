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

    public function getData($limit = 10)
    {
        return $this->anggota->getData();
    }
}