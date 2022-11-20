<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\Game;
use App\Models\Member;
use App\Models\Orderitem;
use App\Models\Ordersgames;
use DB;
use Session;

class LoginController extends Controller
{
    public function userLogin(Request $request){
        $user = Member::where("email", "=", $request->email)->first();
        if ($user){
            if (Hash::check($request->password, $user -> password)){
                $request->session()->put('member_id', $user -> member_id);
                $request->session()->put('email', $user -> email);
                $request->session()->put('user_type', $user -> user_type);
                $request->session()->put('first_name', $user -> first_name);
                $request->session()->put('last_name', $user -> last_name);

                return redirect('/profile');
            }else{
                return "Wrong password!";
            }
        }else{
            return "No registered email!";
        }
    }

    public function showProfile(){
        if (Session::get("user_type") == "member"){
            return view('/UserIndex');
        }else{
            return "Not logged in!";
        }

   
    }
}
