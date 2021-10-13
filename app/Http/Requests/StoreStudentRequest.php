<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'year' => 'required',
            'telphone' => 'required',
            'email' => 'required',
            'birth_date' => 'required',
            'genre' => ' required',
            'school' => 'required',
            'school_class' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'telphone.required' => 'O campo telefone é obrigatório',
            'email.required' => 'O campo e-mail é obrigatório',
            'birth_date.required' => 'O campo data de nascimento é obrigatório',
            'genre.required' => 'O campo sexo é obrigatório',
            'school.required' => 'O campo escola é obrigatório',
            'school_class.required' => 'O campo classe é obrigatório'
        ];
    }
}
