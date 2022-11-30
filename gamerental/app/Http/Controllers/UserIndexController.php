<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use DB;
use Illuminate\Support\Facades\Hash;
use Session;

class UserIndexController extends Controller
{
    public function showList(Request $request)
    {

        // dd(Session::get('member_id'));
        
            $member = Session::get('member_id') ;

            $games = DB::select("SELECT *  FROM games ORDER BY game_id DESC LIMIT 4 ");

            $rents = DB::select("SELECT * FROM orders_games  WHERE member_id =$member ORDER BY order_id DESC LIMIT 1");

            $listGames = DB::select("SELECT LAST_INSERT_ID(order_id) as lastOrder FROM order_item WHERE member_id = $member ORDER BY order_id DESC LIMIT 1");

            if (count($listGames) > 0){
                $list = $listGames[0]->lastOrder;
            }else{
                $list = 0;
            }

            $gameList = DB::select("SELECT order_id, name FROM `order_item` INNER JOIN games ON order_item.game_id = games.game_id WHERE order_id = $list");

            
            return view("userIndex", compact("games",'rents','gameList'));

            }

    }
  
  

