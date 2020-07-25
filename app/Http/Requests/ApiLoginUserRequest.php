<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiRequest;

class ApiLoginUserRequest extends ApiRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password.required' => 'Поле пароль не заполнено!',
            'login.required' => 'Поля логин не заполнено',
        ];
    }
}
