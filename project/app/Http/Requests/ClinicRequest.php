<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicRequest extends FormRequest
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
            'clinic.cnpj' => 'required|cnpj',
            'clinic.cep' => 'required|digits:8',
            'clinic.city_id' => 'required|integer|min:1|max:2',
            'clinic.state_id' => 'required|integer|min:1|max:2',

            'responsible.name' => 'required|max:255',
            'responsible.email' => 'required|email|unique:users,email',
            'responsible.password' => 'required|confirmed|string|min:8|max:12',
            'responsible.cellphone' => 'nullable|max:15|min:15',
            'responsible.phone' => 'nullable|max:15|min:15'
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['cnpj'] .= ",{$this->office}";
            $rules['email'] .= ",{$this->user}";
            $rules['password'] = data_get($this, 'password', '') ? $rules['password'] : '';
        }

        return $rules;
    }

}
