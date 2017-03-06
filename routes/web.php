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
/*Route::get('test', function(){
    //return Auth::user()->name;
    //Auth::loginUsingId(1);
    Auth::attempt(['email'=>'rogerio@colmeiatecnologia.com.br','password'=>'123']);
    dd(Auth::user());
});*/

Route::get('/', 'DefaultController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
