<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['auth:api']], function () {
	Route::post('/contacts', 'Api\v1\UserController@store'); // add Contacts
	Route::get('/contact/{id}/delete', 'Api\v1\UserController@delete'); // Delete contacts
	Route::post('/contact/{id}/update', 'Api\v1\UserController@update'); // Update contacts
});

Route::post('/register', 'Api\v1\UserController@register'); // Register
Route::post('/login', 'Api\v1\UserController@login'); // Login

Route::get('/contacts', 'Api\v1\UserController@index'); // Get all contacts
Route::get('/contact{id}', 'Api\v1\UserController@getContact'); // Get one contact
