<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EkrafFromRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'nama' => [
                'required',
                'string',
                'max:200'
            ],
            'no_whatsapp' => [
                'required'
            ],
            'email' => [
                'required'
            ],
            'jenis_kelamin' => [
                'required',
                'string',
                
            ],
            'nama_usaha' => [
                'required',
                'string',
                'max:200'
            ],
            'alamat' => [
                'required',
                'string',
                'max:200'
            ],
            'lokasi_usaha' => [
                'required',
                'string',
                'max:200'
            ],
            'jenis_usaha' => [
                'required',
                'string'
            ],
            'tahun_berdiri' => [
                'required',
                'date'
            ],
            'jumlah_karyawan' => [
                'required',
                'integer'
                
            ],
            'modal' => [
                'required',
                'integer'
            ],
            'omset' => [
                'required',
                'integer'
            ],
            'marketplace' => [
                'required',
                'string'
            ],
            'website' => [
                'string'
            ],
            'permasalahan' => [
                'required',
                'string',
                'max:250'
            ],
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png'
            ],
            'id_category_sub_ekraf' => [
                'required',
                'integer'
            ],
            'status' => [
                'string'
            ],
            
        ];

        return $rules;
    }
}
