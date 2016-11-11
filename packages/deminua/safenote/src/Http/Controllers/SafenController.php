<?php

namespace Deminua\Safenote\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Deminua\Safenote\Models\Safen;

use Form;

class SafenController extends Controller
{

    public function index()
    {
        return view('safen::index');
    }

    public function show($id)
    {	
    	# $config = \Config::get('safenote.notify_email');
    	# return $config;
        return view('safen::index');
    }

    public function create()
    {
        return view('safen::safen.create');
    }

    public function test(Request $request)
    {
    	$data = $request->data;
		return view('safen::index', compact('data'));
    }

    public function test2()
    {
        return view('safen::index');
    }

    public function list()
    {		
    	#$safen =  new Safen();
    	#$list = $safen->list();
    	#$list = Safen::list();
        return dd(auth()->user()->name);
    }
}
