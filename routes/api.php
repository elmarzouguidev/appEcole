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

Route::get('app-ecoles',['uses'=>'API\EcoleController@index','as'=>'apiecoles']);

Route::get('app-centers',['uses'=>'API\CenterController@index','as'=>'apicenters']);
    //->middleware('apiCheck');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
