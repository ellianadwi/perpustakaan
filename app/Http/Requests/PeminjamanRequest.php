<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 19:22
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class PeminjamanRequest extends Request
{

    protected $attrs = [
        'id_petugas'           => 'id_petugas',
        'id_anggota'           => 'id_anggota',
        'kode_peminjaman'      => 'kode_peminjaman',
        'peminjam_tgl'         => 'peminjam_tgl',
        'peminjam_tgl_kembali' => 'peminjam_tgl_kembali',

    ];

    public function rules()
    {
        return [
            'id_petugas'           => '',
            'id_anggota'           => '',
            'kode_peminjaman'      => '',
            'peminjam_tgl'         => '',
            'peminjam_tgl_kembali' => '',
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
                'id_petugas'           => $message->first('id_petugas'),
                'id_anggota'           => $message->first('id_anggota'),
                'kode_peminjaman'      => $message->first('kode_peminjaman'),
                'peminjam_tgl'         => $message->first('peminjam_tgl'),
                'peminjam_tgl_kembali' => $message->first('peminjam_tgl_kembali')
            ],
        ];
    }
}
