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

Route::get('/', function () {
    return view('eventsmaps');
});
Route::get('/map', function () {
    return view('eventsmaps');
});
Route::get('/event', function () {
    return view('events');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/webservice/report', 'WebserviceController@report');
