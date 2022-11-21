<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use DB;
use Illuminate\Support\Facades\Hash;
use Session;

class WelcomeController extends Controller
{
    public function showGames(Request $request)
    {
        $games = DB::select("SELECT *  FROM `games` ORDER BY game_id DESC LIMIT 4 ");

        return view("welcome", compact("games"));
    }
  
  
}

