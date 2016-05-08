<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Http\Requests;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResConse
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return redirect('/home');
    }

    public function create(){
    	return view('event.form');
    }
    public function store(Request $request)
    {
        /*this->validate($request,[
            'eventName'=>'required',
            'eventSpeaking'=>'required',

            ]);*/

    }
    public function edit($id){
        $events=Home::find($id);
        if(!$events){
            abort(404);
        }
        return view('event.index')->with('events',$events);
    }
}