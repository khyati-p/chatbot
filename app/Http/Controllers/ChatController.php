<?php

namespace App\Http\Controllers;
use App\Chat;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    /*public function pushRequest(Request $request)
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
    	
	
	
    }*/

    
    public function index(Request $request) {
      
// if(isset($_POST['text'])){
// $msg=$_POST["text"];
// $query=chatcoll::where('question', '=', $msg)->get();
//     if(is_null($query)){   
//         $data = "I cant understand you";     
//     }else{
//                 $data= chatcoll::select('answer')->where('question', '=', $msg)->get();
              
//           }

        return "khyati";
}  

//return $data;
// return View::make("/getmsg", compact($data));
   

  
   // public function index()
   // {

   //  $msg=$_POST['text'];
   //  $data=chatcoll.find({"question":$msg},{"answer" : 1});
   //  return response()->json(array('ref'=> $data));
   // }

  public function chat(Request $request)
  {

    $input=json_decode($request->getContent(),true);
    $in=$input['input'];
    $reply=Chat::where('question','=',$in)->get();
     if(count($reply)==0)
     {
         return response()->json("I cant understand");
     }
     else {
        // $query=$reply["input"];
         return response()->json($reply[0]["answer"]);


     }

    

    //return response()->json(["input"=>"khyati","reply"=>$reply]);
    
  }
}
