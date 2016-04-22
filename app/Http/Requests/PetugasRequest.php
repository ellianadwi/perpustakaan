<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 10:17
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class PetugasRequest extends Request
{

    protected $attrs = [
        'kode_petugas' => 'kode_petugas',
        'nama_petugas' => 'nama_petugas',
    ];

    public function rules()
    {
        return [
            'kode_petugas' => 'required',
            'nama_petugas' => 'required',
        ];
    }

    public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

    protected function formatErrors(validator $validator)
    {
        $message = $validator->errors();
        return [
            'success' => false,
            'validation' => [

                'kode_petugas' => $message->first('kode_petugas'),
                'nama_petugas' => $message->first('nama_petugas')
            ]
        ];
    }
}
