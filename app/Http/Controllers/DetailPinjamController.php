<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 19:51
 */

namespace App\Http\Controllers;

use App\Domain\Entities\DetailPinjam;
use App\Domain\Repositories\DetailPinjamRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\DetailPinjamRequest;
use Illuminate\Http\Request;
use App\Http\Requests;

class DetailPinjamController extends Controller
{

    protected $detail_pinjam;

    public function __construct(DetailPinjamRepository $detail_pinjam)
    {
        $this->middleware('auth');
        $this->detail_pinjam = $detail_pinjam;
    }

    public function index(Request $request)
    {
        return $this->detail_pinjam->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function store(DetailPinjamRequest $request)
    {
        return $this->detail_pinjam->create($request->all());
    }

    public function show($id)
    {
        return $this->detail_pinjam->find($id);
    }

    public function update(DetailPinjamRequest $request, $id)
    {
        return $this->detail_pinjam->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->detail_pinjam->delete($id);
    }

    public function getData($limit = 10)
    {
        return $this->detail_pinjam->getData();
    }
}