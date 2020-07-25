<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required',
            'password' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Поле пароль не заполнено!',
            'login.required' => 'Поля логин не заполнено',
        ];
    }
}
