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
     return view('task');
});

/**
 * Add A New Task
 */
Route::post('/task', function (Request $request) {
	//
});

/**
 * Delete An Existing Task
*/
Route::delete('/task/{id}', function ($id) {
	//
});
