<?php


Route::group([
	'prefix'=>'safenote',
	'namespace' => 'Deminua\Safenote\Http\Controllers',
	'middleware' => ['web', 'auth']
	], function() {

	#Route::resource('/', 'SafenController', ['except' => ['create', 'store', 'update', 'destroy']]);
	Route::get('create', 'SafenController@create');
	Route::get('show/{id}', 'SafenController@show');
	/*
	Route::get('/', 'SafenController@index');
	Route::get('create', 'SafenController@index');
    Route::get('show/{data?}', 'SafenController@test');
    Route::get('list', 'SafenController@list');
    */

});


// Route::get('/safe-note/{data?}', function ($data) {
// 	return view('safenote::index', compact('data'));
// });
