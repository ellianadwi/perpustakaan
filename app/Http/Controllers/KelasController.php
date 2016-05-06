<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 03/05/2016
 * Time: 13:07
 */

namespace App\Http\Controllers;

    use App\Domain\Entities\Kelas;
    use App\Domain\Repositories\KelasRepository;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\KelasRequest;
    use Illuminate\Http\Request;
    use App\Http\Requests;

class KelasController extends Controller
{

    protected $kelas;

    public function __construct(KelasRepository $kelas)
    {
        $this->kelas = $kelas;
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return $this->kelas->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    public function store(KelasRequest $request)
    {
        return $this->kelas->create($request->all());
    }

    public function show($id)
    {
        return $this->kelas->find($id);
    }

    public function update(KelasRequest $request, $id)
    {
        return $this->kelas->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->kelas->delete($id);
    }

    public function getData($limit = 10)
    {
        return $this->kelas->getData();
    }
}