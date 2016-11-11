<?php

Route::get('/safe-note/{data?}', function ($data) {
	return view('safenote::index', compact('data'));
});

Route::get('safe-note2/{data?}', 'Deminua\Safenote\Http\Controllers\SafenController@test');
