<?php

Route::group([
		'prefix'=>'safenote',
		'namespace' => 'Deminua\Safenote\Http\Controllers',
		'middleware' => ['web', 'auth'],
		'as'=>'safenote::',
	], function() {

	Route::get('create', 'SafenController@create')->name('create');
	Route::get('show/{id}', 'SafenController@show')->name('show');
	Route::post('create', 'SafenController@store')->name('store');
	Route::post('store', 'SafenController@store')->name('store');
});