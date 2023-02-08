<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//API
Route::GET('people',          'apiController@list_people'); // Lista as pessoas
Route::GET('check_people/{id}',     'apiController@check_people'); // Lista as pessoas
Route::POST('people',         'apiController@insert_people'); // cadastra uma Pessoa
Route::POST('people_update',  'apiController@update_people'); // atualiza uma pessoa
Route::DELETE('people/{id}',  'apiController@del_people'); // deleta uma pessoa actions Delete
Route::get('people_del/{id}',  'apiController@del_people'); // deleta uma pessoa via url

Route::GET('check_contact/{id}','apiController@check_contact'); // Lista as pessoas
Route::GET('list_contact/{id}','apiController@list_contact'); // cadastra os contato de uma pessoa
Route::POST('contact',         'apiController@insert_contact'); // cadastra os contato de uma pessoa
Route::POST('contact_update',  'apiController@contact_update'); // atualiza os contatos de uma pessoa
Route::get('del_contact/{id}', 'apiController@del_contact'); // atualiza os contatos de uma pessoa
Route::DELETE('del_contact',   'apiController@del_contact'); // atualiza os contatos de uma pessoa


