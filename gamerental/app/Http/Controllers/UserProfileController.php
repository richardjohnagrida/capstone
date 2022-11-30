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

        $members = DB::select("SELECT *  FROM members WHERE member_id = $memId");

        $rent = DB::select("SELECT COUNT(order_id) as totalRent  FROM order_item WHERE member_id = $memId");

        $rents = DB::select("SELECT * FROM orders_games  WHERE member_id =$memId ORDER BY order_id DESC LIMIT 1");

            $listGames = DB::select("SELECT LAST_INSERT_ID(order_id) as lastOrder FROM order_item WHERE member_id = $memId ORDER BY order_id DESC LIMIT 1");

            if (count($listGames) > 0){
                $list = $listGames[0]->lastOrder;
            }else{
                $list = 0;
            }

            $gameList = DB::select("SELECT order_id, name FROM order_item INNER JOIN games ON order_item.game_id = games.game_id WHERE order_id = $list");

        return view('userProfile' , compact('members','rent','rents', 'gameList'));

   }


}