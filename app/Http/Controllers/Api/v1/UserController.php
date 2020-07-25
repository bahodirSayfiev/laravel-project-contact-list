<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ApiRegisterUserRequest;
use App\Http\Requests\ApiLoginUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function register (ApiRegisterUserRequest $request)
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
		
  		return response()
      	 		->json(['status' => true])
  			 	->setStatusCode(201, "This accaund registered");
			

    }

    public function login(ApiLoginUserRequest $request)
    {
    	$user = User::where("login", $request->input('login'))->first();

    	if ($user && Hash::check($request->input('password'), $user->password)) {

    		$user->api_token = Str::random(200);
    		$user->save();

    		return response()
    			->json([
    				'status' => true,
    				'user' => $user,
    			])->setStatusCode(200, "Authenticated");
    	} else {
    		return response()
    				->json([
    					'status' => false,
    				], 401);
    	}
    }
}
