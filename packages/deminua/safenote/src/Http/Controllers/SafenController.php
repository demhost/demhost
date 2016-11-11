<?php

namespace Deminua\Safenote\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Deminua\Safenote\Models\Safen;
use Deminua\Safenote\Models\SafenLogin;
use Form;


class SafenController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        return view('safen::index');
    }

    public function show($id)
    {	
        $safen = Safen::findOrFail($id);
        $SafenLogin = SafenLogin::get();

        #$safen->safenlogins()->detach();
        $safen->safenlogins()->sync($SafenLogin);
        #$safen->safenlogins()->attach($SafenLogin);

        #$safen->save();
        #return dd($SafenLogin);
        return dd($safen);
    	# $config = \Config::get('safenote.notify_email');
    	# return $config;
        return view('safen::index');
    }

    public function create()
    {
        return view('safen::safen.create');
    }

    public function store(Request $request)
    {

        #dd($request->all());

        $this->validate($request, [
            'name' => 'required|unique:safens|min:3|max:255',
            'description' => 'required',
        ]);

        #$safen = Safen::create($request->all());

        

        $safen = new Safen;
        $safen->name = $request->name;
        $safen->description = $request->description;
        $safen->save();


        return dd($safen);
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
