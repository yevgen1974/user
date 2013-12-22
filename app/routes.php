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



Route::controller('users', 'UsersController');
Route::get('users', array('as'=>'index','uses'=>'users@index'));
Route::get('users/new', array('as'=>'new_user','uses'=>'users@new'));
Route::get('users/show', array('as'=>'show','uses'=>'users@show'));
Route::post('users/create', array('uses'=>'users@create'));
Route::get('users/edit/(:any)', array('as'=>'edit','uses'=>'users@edit'));
Route::put('users/update', array('uses'=>'users@update'))->before('csrf');
Route::delete('users/destroy', array('uses'=>'users@destroy'));
