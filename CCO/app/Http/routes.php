<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});


Route::get('movimientosSap', [
    'as' => 'movimientosSap', 'uses' => 'MovsapController@index'
]);    //info que afectará al Padron

Route::get('InformeEscalafon', [
    'as' => 'infoEscalafon', 'uses' => 'InformeController@index'
]);    //Padrón

Route::group(['prefix' => 'admin'], function () {
    Route::resource('escalafones','EscalafonController');
});  //seccion admin/escalafones/ .... (index, create, show ....)...