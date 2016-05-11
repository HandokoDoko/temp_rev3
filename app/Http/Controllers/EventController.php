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
        $events = Home::all();
        $a = 0;
        return view('event.index', ['events' => $events,'no' => $a]);
    }

    public function create(){
        return view('event.form');
    }
    public function destroy($id){
        $events=Home::find($id);
        $events->delete();
        return redirect('/event');
    }
    public function store(Request $request)
    {
        /*$this->validate($request,[
            'eventName'=>'required',
            'eventSpeaking'=>'required',
            'date'=>'required',
            'enrollKey'=>'required',
            'idUser'=>'required'
            'template'=>'required'
            ]);*/
        $event=new Home;
        $event->eventName=$request->eventName;
        $event->eventSpeaking=$request->eventSpeaking;
        $event->date=$request->date;
        $event->enrollKey=$request->enrollKey;
        $event->idUser=$request->idUser;
        $event->template=$request->template;
        $event->signature=$request->signature;
        $event->save();
        return redirect('/event');
    }
    public function edit($id){
        $events=Home::find($id);
        if(!$events){
            abort(404);
        }
        return view('event.edit')->with('events',$events);
    }
}