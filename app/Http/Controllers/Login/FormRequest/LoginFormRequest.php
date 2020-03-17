<?php

namespace App\Http\Controllers\Login\FormRequest;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class LoginFormRequest extends FormRequest
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
        $retorno = [
            'email' => 'required',
            'senha' => 'required'
        ];

        return $retorno;
    }

    public function messages()
    {
        $messages = [
            'email.required' => 'O campo e-mail é de preenchimento obrigatório',
            'senha.required' => 'O campo senha é de preenchimento obrigatório'
        ];

        return $messages;
    }
}
