<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 21/04/2016
 * Time: 14:37
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class BukuRequest extends Request
{

    protected $attrs = [
        'id_kategori'       => 'id_kategori',
        'id_penerbit'       => 'id_penerbit',
        'kode_buku'         => 'kode_buku',
        'judul_buku'        => 'judul_buku',
        'jumlah_buku'       => 'jumlah_buku',
        'diskripsi_buku'    => 'diskripsi_buku',
        'pengarang_buku'    => 'pengarang_buku',
        'tahun_terbit_buku' => 'tahun_terbit_buku',
    ];

    public function rules()
    {
        return [
            'id_kategori'       => '',
            'id_penerbit'       => '',
            'kode_buku'         => '',
            'judul_buku'        => '',
            'jumlah_buku'       => '',
            'diskripsi_buku'    => '',
            'pengarang_buku'    => '',
            'tahun_terbit_buku' => '',
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
                'id_kategori'       => $message->first('id_kategori'),
                'id_penerbit'       => $message->first('id_penerbit'),
                'kode_buku'         => $message->first('kode_buku'),
                'judul_buku'        => $message->first('judul_buku'),
                'jumlah_buku'       => $message->first('jumlah_buku'),
                'diskripsi_buku'    => $message->first('diskripsi_buku'),
                'pengarang_buku'    => $message->first('pengarang_buku'),
                'tahun_terbit_buku' => $message->first('tahun_terbit_buku')
            ]
        ];
    }
}
