<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Member;
use App\Models\Orderitem;
use App\Models\Ordersgames;
use Illuminate\Support\Facades\DB;

class UserGamesController extends Controller
{
    public function showUserGames(Request $request)
    {

        $offset=0;
        $limit=config("constants.options.pagination_limit");

        if($request->has("page") && is_numeric($request->get("page")) ){

            $offset = $limit * ($request->get("page")-1);
            
        }

        $games = DB::select("SELECT *  FROM `games` ORDER BY console_id");

        $totalRows =  DB::select("SELECT COUNT(game_id) as totalRows FROM `games` WHERE status ='active'");
      
        $countRows = $totalRows[0]->totalRows;
        $pages = ceil($countRows/$limit);
        $activePage=$request->get("page");

        return view("userGames", compact("games", 'totalRows','pages','activePage'));
    }

}



