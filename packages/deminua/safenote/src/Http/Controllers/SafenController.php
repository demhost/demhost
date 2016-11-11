<?php

namespace Deminua\Safenote\Http\Controllers;

use Illuminate\Http\Request;

class SafenController
{

    public function test(Request $request)
    {
    	$data = $request->data;
		return view('safenote::index', compact('data'));
    }

    public function test2()
    {
        return view('safenote::index');
    }

}
