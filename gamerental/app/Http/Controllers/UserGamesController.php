<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Member;
use App\Models\Orderitem;
use App\Models\Ordersgames;
use App\Models\Platform;
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

        $platforms = DB::select("SELECT *  FROM `platforms`");
        
        $totalRows =  DB::select("SELECT COUNT(game_id) as totalRows FROM `games` WHERE status ='active'");
      
        $countRows = $totalRows[0]->totalRows;
        $pages = ceil($countRows/$limit);
        $activePage=$request->get("page");

        return view("userGames", compact("games", 'totalRows','pages','activePage','platforms'));
    }


    public function search (Request $request)
    {

        $tittle = $request->input("search");
        $offset=0;
        $limit=config("constants.options.pagination_limit");

        if($request->has("page") && is_numeric($request->get("page")) ){

            $offset = $limit * ($request->get("page")-1);
            
        }

          if($request->input("search") != null){
            
            $games = DB::select("SELECT *  FROM `games` WHERE name LIKE '%$tittle%' ");

        }

        $totalRows =  DB::select("SELECT COUNT(game_id) as totalRows FROM `games` WHERE status ='active' AND name LIKE '%$tittle%' ");
      
        $countRows = $totalRows[0]->totalRows;
        $pages = ceil($countRows/$limit);
        $activePage=$request->get("page");

        return view("userGames", compact("games", 'totalRows','pages','activePage'));
    }

    public function filter (Request $request)
    {

        $console = $request->input("console");
        $genre = $request->input("genre");
        
        if($console != null && $genre !=null)
        {
            $games =  DB::select("SELECT *  FROM `games`  INNER JOIN platforms ON games.console_id = platforms.console_id WHERE console_name ='$console' AND genre = '$genre' ");

        }

        elseif($console == null && $genre !=null){
            $games =  DB::select("SELECT *  FROM `games`  INNER JOIN platforms ON games.console_id = platforms.console_id WHERE genre = '$genre' ");
        }

        elseif($console != null && $genre == null){
            $games =  DB::select("SELECT *  FROM `games`  INNER JOIN platforms ON games.console_id = platforms.console_id WHERE console_name ='$console' ");
        }
  

        return view("userGames", compact("games"));
    }

}





