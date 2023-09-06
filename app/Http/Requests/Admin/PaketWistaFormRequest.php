<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PaketWistaFormRequest extends FormRequest
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
            'nama_paket_wisata' => [
                'required',
                'string'
            ],
            'lokasi_tempat_wisata' => [
                'required',
                'string'
            ],
            'nama_tempat_wisata' => [
                'required',
                'string',
            ],
            'kontak' => [
                'string',
                'required'
            ],
            'deskripsi_singkat' => [
                'required',
                'string'
            ],
            'informasi' => [
                'required'
            ],
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png'
            ],
            'embed_gmaps' => [
                'required'
            ],
            'tour' => [
                'required'
            ]
            
        ];

        return $rules;
    }
}
