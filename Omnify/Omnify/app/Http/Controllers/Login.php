<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use \Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class Login extends Controller
{
    function index(){
        return view('Login_pages.signup');
          }

    function Login(){
        return view('Login_pages.Login');
            }




// User Register Function

          function store(Request $request ){
            $id=$request->id;
                $register = $request->validate([
                    'fname' => 'required',
                    'lname' => 'required',
                    'Email' => 'required|email|unique:users,email,'.$id,
                    'Password' => 'required',
                ]);


            $register =new Register;

            $register->Full_Name = $request->input('fname');
            $register->Last_Name = $request->input('lname');
            $register->Email = $request->input('Email');
            $register->Password = $request->input('Password');

            $register->save();

            return redirect('Login')->with('success','Account Created Successfully!');

// User Register Function End
}


// user id pass matching code

function home(Request $request ){
    $register = $request->validate([

        'Email' => 'required|email',
        'Password' => 'required',
    ]);

   $res= Register::where('Email', '=', $request->Email)
    ->where('Password', '=', $request->Password) ->first();


    if($res){

//Created session to  Make sure that user must see only their schedules
        $request->session()->put('userid', $res->id);
//session end

        $data['user']=$res;


        return view('front_pages/index-1')->with($data);

    }

    return Redirect()->back()->withErrors(['msg' => 'Email or Password is incorrect']);
}
// user id pass matching code end
}
