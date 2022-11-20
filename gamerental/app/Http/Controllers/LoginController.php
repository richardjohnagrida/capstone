<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{

   
    public function userLogin(Request $request){
        $user = Member::where("email", "=", $request->email)->first();
        if ($user){
            if (Hash::check($request->pw, $user -> password)){
                $request->session()->put('id', $user -> member_id);
                $request->session()->put('email', $user -> email);
                $request->session()->put('role', $user -> role);
                $request->session()->put('first_name', $user -> first_name);
                $request->session()->put('last_name', $user -> last_name);

                return redirect('/UserIndex');
            }else{
                return "Wrong password!";
            }
        }else{
            return "No registered email!";
        }
    }

    public function showProfile(){
        if (Session::get("role") == "user"){
            return view('UserIndex');
        }else{
            return "Not logged in!";
        }
    }

    public function logout(){
        if (Session::has('id')){
            Session::pull('id');
            Session::pull('email');
            Session::pull('role');
            Session::pull('first_name');
            Session::pull('last_name');
            return redirect('/');
        }
    }
}
}
