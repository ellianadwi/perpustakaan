<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 15:18
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class AnggotaRequest extends Request
{

    protected $attrs = [
        'kode_anggota'   => 'kode_anggota',
        'nama_anggota'   => 'nama_anggota',
        'alamat_anggota' => 'alamat_anggota',
        'telp_anggota'   => 'telp_anggota',
        'id_kelas'          => 'id_kelas',
    ];

    public function rules()
    {
        return [
            'kode_anggota'   => '',
            'nama_anggota'   => '',
            'alamat_anggota' => '',
            'telp_anggota'   => '',
            'id_kelas'          => '',
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
            'success'    => false,
            'validation' => [
                'kode_anggota'   => $message->first('kode_anggota'),
                'nama_anggota'   => $message->first('nama_anggota'),
                'alamat_anggota' => $message->first('alamat_anggota'),
                'telp_anggota'   => $message->first('telp_anggota'),
                'id_kelas'          => $message->first('id_kelas')
            ],
        ];
    }
}
