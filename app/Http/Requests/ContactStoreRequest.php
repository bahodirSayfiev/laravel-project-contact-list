<?php

namespace App\Http\Requests;

class ContactStoreRequest extends ApiRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'user_email' => 'required|email',
            'user_call' => 'required',
        ];
    }
}
