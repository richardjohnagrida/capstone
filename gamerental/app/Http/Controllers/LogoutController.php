<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Session;

class LogoutController extends Controller
{
    public function logout(){
        if (Session::has('member_id')){
            Session::pull('member_id');
            Session::pull('email');
            Session::pull('user_type');
            Session::pull('first_name');
            Session::pull('last_name');
            
            return redirect('/');
        }
    }
}
