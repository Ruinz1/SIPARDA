<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventWistaFormRequest extends FormRequest
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
            'nama_event' => [
                'required',
                'string'
            ],
            'lokasi_event' => [
                'required',
                'string'
            ],
            'tanggal_event' => [
                'required',
                'string',
                
            ],
            'deskripsi' => [
                'required',
                'string',
                'max:500'
            ],
            'informasi' => [
                'required'
            ],
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png'
            ],
            'embed_gmaps' => [
                'required',
            ]
        ];

        return $rules;
    }
}
