<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 19:54
 */

namespace App\Http\Requests;


use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class DetailPinjamRequest extends Request
{

    protected $attrs = [
        'id_peminjaman'         => 'id_peminjaman',
        'id_buku'               => 'id_buku',
        'detail_tgl_kembali'    => 'detail_tgl_kembali',
        'detail_denda'          => 'detail_denda',
        'detail_status_kembali' => 'detail_status_kembali',

    ];

    public function rules()
    {
        return [
            'id_peminjaman'         => '',
            'id_buku'               => '',
            'detail_tgl_kembali'    => '',
            'detail_denda'          => '',
            'detail_status_kembali' => '',

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
                'id_peminjaman'         => $message->first('id_peminjaman'),
                'id_buku'               => $message->first('id_buku'),
                'detail_tgl_kembali'    => $message->first('detail_tgl_kembali'),
                'detail_denda'          => $message->first('detail_denda'),
                'detail_status_kembali' => $message->first('detail_status_kembali')
            ],
        ];
    }
}
