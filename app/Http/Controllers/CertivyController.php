<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\User;
use App\Http\Requests;
use App\UserProfile;
use Image;

class CertivyController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Home::all();
        $a = 0;
        return view('home.index', ['events' => $events,'no' => $a]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = UserProfile::find($id);

        if($request->hasFile('photo'))
        {

            $fileName        = $user->id . '.jpg';
            $destinationPath = 'images/';
            $proses          = $request->file('photo')->move($destinationPath, $fileName);
            $user->photo     = $fileName;
        }
        if($request->has('Password')){
            $user->Password     = bcrypt($request->Password);
        }

        $user->orgName      = $request->orgName;
        $user->orgEmail     = $request->orgEmail;
        $user->orgPhone     = $request->orgPhone;
        $user->orgCountry   = $request->orgCountry;
        $user->orgCity      = $request->orgCity;
        $user->orgAddress   = $request->orgAddress;
        $user->name         = $request->name;
        $user->gender       = $request->gender;
        $user->userName     = $request->userName;
        $user->email        = $request->email;
        $user->phone        = $request->phone;

        $user->save();
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
