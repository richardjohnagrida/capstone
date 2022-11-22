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

class gamesIndexController extends Controller
{
    public function showIndexGames()
    {
        $games = DB::select("SELECT * FROM `games`  WHERE status ='active' AND console_id = 1  OR console_id = 2 OR console_id = 4  ORDER BY console_id LIMIT 4");

        $xbox = DB::select("SELECT * FROM `games`  WHERE status ='active' AND console_id = 7  OR console_id = 8   ORDER BY console_id LIMIT 4");

        $nintendo = DB::select("SELECT * FROM `games`  WHERE status ='active' AND console_id = 5  OR console_id = 6  ORDER BY console_id LIMIT 3");

        return view ('gameIndex', compact('games', 'xbox', 'nintendo'));
    }
    
}
