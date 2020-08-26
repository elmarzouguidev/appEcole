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
Route::get('/ecoles/{slug}',['uses'=>'EcoleController@singleEcole','as'=>'ecoles.single']);
Route::post('/ecoles/{slug}',['uses'=>'EcoleController@storeReview','as'=>'ecoles.actions.review']);

Route::get('/centre-de-langues',['uses'=>'CenterController@index','as'=>'centers']);
Route::get('/centre-de-langues/{slug}',['uses'=>'CenterController@singleCenter','as'=>'centers.single']);
Route::post('/centre-de-langues/{slug}',['uses'=>'CenterController@storeReview','as'=>'centers.actions.review']);

Route::get('/cours-de-soutiens',['uses'=>'SoutienController@index','as'=>'cours']);
Route::get('/cours-de-soutiens/{slug}',['uses'=>'SoutienController@single','as'=>'cours.single']);
Route::post('/cours-de-soutien/{slug}',['uses'=>'SoutienController@storeReview','as'=>'cours.actions.review']);

Route::get('/librairies',['uses'=>'LibrairieController@index','as'=>'librairies']);
Route::get('/librairies/{slug}',['uses'=>'LibrairieController@single','as'=>'librairies.single']);
Route::post('/librairies/{slug}',['uses'=>'LibrairieController@storeReview','as'=>'librairies.actions.review']);

Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();

});


