<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function create(){
    	return view('event.form');
    }
}