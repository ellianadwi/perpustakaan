<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 14:34
 */

namespace App\Http\Controllers;

use App\Domain\Entities\Buku;
use App\Domain\Repositories\BukuRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\BukuRequest;
use Illuminate\Http\Request;
use App\Http\Requests;

class BukuController extends Controller
{

    protected $buku;

    public function __construct(BukuRepository $buku)
    {
        $this->buku = $buku;
    }

    public function index(Request $request)
    {
        return $this->buku->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function store(BukuRequest $request)
    {
        return $this->buku->create($request->all());
    }

    public function show($id)
    {
        return $this->buku->find($id);
    }

    public function update(BukuRequest $request, $id)
    {
        return $this->buku->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->buku->delete($id);
    }

    public function getData($limit = 10)
    {
        return $this->buku->getData();
    }
}