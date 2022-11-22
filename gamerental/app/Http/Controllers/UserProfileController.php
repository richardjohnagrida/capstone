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

class UserProfileController extends Controller
{

    public function showInfo(){
       
        $memId = Session::get('member_id');

        $members = DB::select("SELECT *  FROM `members`WHERE member_id = $memId");

        $rent = DB::select("SELECT COUNT(order_id) as totalRent  FROM order_item WHERE member_id = $memId");

        return view('userProfile' , compact('members','rent'));

   }


}
