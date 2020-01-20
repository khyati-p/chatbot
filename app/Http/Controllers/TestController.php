<?php

namespace App\Http\Controllers;
use App\Sample;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function pushRequest(Request $request)
    {
    	 $obj=new Sample();
    	 $obj->username=$request->get('user_name');
    	 $obj->password=$request->get('user_pass');
    	 $obj->save();
    	 $users=Sample::all();
    	 //return view('SignUp');
    	 //return redirect('loggedIn')->with('success', 'successfully added');
    	// echo 'successfullydone';
    	
    	 //echo $request->session()->get('user');
    	 //return view('Home')->with('user',$request->session()->get('user'));
    	 return view('Home');
    	
	
	
    }
    

  
}
