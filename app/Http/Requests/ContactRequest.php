<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'username' => 'required',
            'user_email' => 'required|email',
            'user_call' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Поле имя не заполнено!',
            'user_email.required' => 'Введите свой адрес электронной почты',
            'user_call.required' => 'Введите ваш номер телефона',
            'user_email.email' => 'Неверный адрес электронной почты',
        ];
    }
}
