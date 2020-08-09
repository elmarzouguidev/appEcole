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


Route::get('/',['uses'=>'SiteController@index','as'=>'home']);

Route::get('/ecoles',['uses'=>'EcoleController@index','as'=>'ecoles']);

Route::get('/centre-de-langues',['uses'=>'CenterController@index','as'=>'centres']);

Route::get('/cours-de-soutiens',['uses'=>'SoutienController@index','as'=>'cours']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
