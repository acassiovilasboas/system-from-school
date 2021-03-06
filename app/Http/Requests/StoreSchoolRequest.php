<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
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
        return [
            'name' => 'required',
            'address' => 'required',
            'district' => 'required',
            'city' => 'required',
            'state' => 'required|uf'
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'address.required' => 'O campo endereço é obrigatório.',
            'district.required' => 'O campo bairro é obrigatório.',
            'city.required' => 'O campo cidade é obrigatório.',
            'state.required' => 'É preciso selecionar um estado.',
            'state.uf' => 'Selecione um estado da federação brasileira.'
        ];

    }
}
