<?php
namespace App\Http\Controllers;
use view;

class signupController extends Controller {
    public function signUp()
    {
       return view('signup');
    }

}