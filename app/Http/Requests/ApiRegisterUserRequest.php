<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiRequest;

class ApiRegisterUserRequest extends ApiRequest
{

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */

    public function rules()
    {
        return [
            'last_name' => 'required',
            'first_name' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'login' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'call' => 'required|unique:users',
            'date_of_birth' => 'required',
        ];
    }
}
