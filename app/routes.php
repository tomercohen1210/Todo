<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['uses' => 'todoController@index']);

Route::get('/saveTask', ['uses' => 'todoController@store']);

//Route::get('/getTasks', ['uses' => 'todoController@show']);

Route::get('todos',array('as'=>'getTasks','uses'=>'todoController@show'));

Route::post('todos',array('as'=>'getTasks','uses'=>'todoController@update'));

Route::delete('todos/{id}',array('as'=>'getTasks','uses'=>'todoController@destroy'));



