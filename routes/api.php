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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::prefix('v1')->namespace('Api')->group(function(){
    route::prefix('/real_states')->name('real_states.')->group(function(){
        route::resource('/', 'RealStateCotroller@index')->name('index'); 
    });

});
