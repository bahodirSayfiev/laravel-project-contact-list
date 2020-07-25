<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
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

    public function messages()
    {
        return [
            'first_name.required' => 'Поле имя не заполнено!',
            'last_name.required' => 'Поле фамилие не заполнено!',
            'password.required' => 'Поле пароль не заполнено!',
            'password.min' => 'Пароль должен содержать минимум 8 символов',
            'login.required' => 'Поля логин не заполнено',
            'email.required' => 'Введите свой адрес электронной почты',
            'email.email' => 'Неверный адрес электронной почты',
            'call.required' => 'Введите ваш номер телефона',
            'date_of_birth.required' => 'Введите дату рождение!',
            'password_confirmation.required' => 'Поттвердите ваш пароль',
            'password.confirmed' => 'Пароль не софпадает',
        ];
    }
}