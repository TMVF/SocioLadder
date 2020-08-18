<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;


class MainController extends Controller
{
    function index()
    {
     return view('login');
    }

    function checklogin(Request $request)
    {
    	$email = $request->input('email');
    	$password = $request->input('password');

    	$checklogin = \DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
   
     if(count($checklogin) > 0)
     {
     	// $checklogin->session()->put('data',$checklogin);
     	// return $checklogin;

      return view('successlogin',compact('checklogin'));
     	// echo "loging";
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    // function successlogin()
    // {
    //  return view('successlogin');
    // }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
}
