<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function register(Request $request)
    {
        $data=array();
        $data['email']=$request->email;
        $data['password']=$request->password;
    }
}
