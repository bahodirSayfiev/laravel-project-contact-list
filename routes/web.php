<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ContactController@getAll')->name('all-contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/group/family', 'ContactController@getFamillyGroup')->name('family');

Route::get('/group/frands', 'ContactController@getFrandsGroup')->name('frands');

Route::get('/group/jobs', 'ContactController@getJobsGroup')->name('jobs');

Route::get('/delete', function () {
    return view('delete');
})->name('delete');

Route::get('/signin', function () {
    return view('register');
})->name('signin');

Route::post('/register', 'AuthController@register')->name('register-form');
Route::post('/login', 'AuthController@login')->name('login-form');

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::post('/add', 'ContactController@add')->name('add-form');

Route::get('/contact/{id}', 'ContactController@one')->name('one-contact');

Route::get('/contact/{id}/edit', 'ContactController@edit')->name('edit-contact');
Route::post('/contact/{id}/update', 'ContactController@update')->name('update-contact-submit');

Route::get('/contact/{id}/delete', 'ContactController@delete')->name('delete-contact');

Route::get('/del', 'ContactController@PageDeleteContact')->name('delete-page-contact');
Route::post('/comment', 'ContactController@addComment')->name('form-comment-submit');

Route::get('/group/add', 'ContactController@groupAdd')->name('contact-group-add');

Route::get('search', 'ContactController@search');

