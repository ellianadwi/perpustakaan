<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 13:23
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class KategoriRequest extends Request
{

    protected $attrs = [
        'kode_kategori' => 'kode_kategori',
        'nama_kategori' => 'nama_kategori',
    ];

    public function rules()
    {
        return [
            'kode_kategori' => 'required',
            'nama_kategori' => 'required',
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

                'kode_kategori' => $message->first('kode_kategori'),
                'nama_kategori' => $message->first('nama_kategori')
            ]
        ];
    }
}