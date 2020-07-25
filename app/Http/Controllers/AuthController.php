<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class AuthController extends Controller
{
    public function register (RegisterRequest $request)
    {
    	/*
    	* 	Сохранение данных пользователя в БД
    	*/
    	User::create([
    			'last_name' => $request->input('last_name'),
    			'first_name' => $request->input('first_name'),
    			'login' => $request->input('login'),
    			'email' => $request->input('email'),
    			'city' => $request->input('city'),
    			'call' => $request->input('call'),
    			'password' => Hash::make($request->input('password')),
    			'date_of_birth' => $request->input('date_of_birth'),
			]);
			

		
    	/*
    	*	Возвращение ответа и переадрисация пользователя
    	*/
		
  		response()
      	 ->json(['status' => true])
  			 ->setStatusCode(201, "This accaund registered");
			 
		/*
		*	Переадресация успешно зарегистрированного пользователя
		*/
		
      return redirect()
      			->route('all-contact')
      			->with('success', 'Вы зарегистрированы успешно и можете осуществить вход!');

    }

    public function login (LoginUserRequest $request)
    {

  		if(!Auth::attempt($request->only(['login', 'password']), $request->has('remember') )) {
  			return redirect()->back()->with('info', 'Логин или пароль неверно');
  		} else {
  			return redirect()->route('all-contact')->with('success', 'Вы вошли на сайт успешно!');
  		}
      
    }

   public function logout()
   {
      Auth::logout();
      return redirect()->route('all-contact');
   }
}
