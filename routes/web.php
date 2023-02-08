<?php

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

Route::get('/', function () {
    return view('auth.login');
    //return view('index');
});


//Front

Route::GET('show_peoples',              'pagesController@show_peoples'); // Lista as pessoas
Route::POST('modal_update_pessoa',      'pagesController@modal_update_pessoa'); // Lista as pessoas
Route::POST('modal_list_contacts',      'pagesController@modal_list_contacts'); // Lista as pessoas
Route::POST('modal_insert_contato',     'pagesController@modal_insert_contato'); // Lista as pessoas
Route::POST('modal_update_contato',     'pagesController@modal_update_contato'); // Lista as pessoas
Route::POST('modal_update_contact',     'pagesController@modal_update_contact'); // Lista as pessoas


Route::GET('view_lita_contacts/{id}',   'pagesController@view_lita_contacts'); // Lista as pessoas

