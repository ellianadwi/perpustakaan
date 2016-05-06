<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 10:12
 */
namespace App\Http\Controllers;


use App\Domain\Entities\Petugas;
use App\Domain\Repositories\PetugasRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\PetugasRequest;
use Illuminate\Http\Request;
use App\Http\Requests;

class PetugasController extends Controller
{

    protected $petugas;

    public function __construct(PetugasRepository $petugas)
    {
        $this->petugas = $petugas;
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return $this->petugas->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function store(PetugasRequest $request)
    {
        return $this->petugas->create($request->all());
    }
    public function show($id)
    {
        return $this->petugas->find($id);
    }
    public function update(PetugasRequest $request, $id)
    {
        return $this->petugas->update($id, $request->all());
    }
    public function destroy($id)
    {
        return $this->petugas->delete($id);
    }
    public function getData($limit = 10)
    {
        return $this->petugas->getData();
    }

//    public function getPageModal(Request $request)
//    {
//        return $this->petugas->getPageModal(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
//    }
}
