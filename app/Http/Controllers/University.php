<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class University extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:university');
    }

    public function register(Request $request)
    {
        $data=array();
        $data['email']=$request->email;
        $data['password']=$request->password;

        $reg=DB::table('universitys')
                        ->insert($data);
                    $notification=array(
                    'messege'=>'Successfully Registered',
                    'alert-type'=>'success'
                    );
                return view('university.home');
    }
}
