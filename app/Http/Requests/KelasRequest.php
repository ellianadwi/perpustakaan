<?php
/**
 * Created by PhpStorm.
 * User: Lely
 * Date: 03/05/2016
 * Time: 13:09
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class KelasRequest extends Request
{

    protected $attrs = [
        'kelas' => 'kelas',
        'jurusan' => 'jurusan',
    ];

    public function rules()
    {
        return [
            'kelas' => 'required',
            'jurusan' => 'required',
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

                'kelas' => $message->first('kelas'),
                'jurusan' => $message->first('jurusan')
            ]
        ];
    }
}