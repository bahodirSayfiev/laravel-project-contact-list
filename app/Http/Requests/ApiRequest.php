<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validatition\Validate;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 423));
    }
}
