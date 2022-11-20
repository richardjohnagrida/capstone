<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Member;
use App\Models\Orderitem;
use App\Models\Ordersgames;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{

    public function result(Request $request)
    {
        $filteredConsole = $request->input("fconsole");
        $filteredGenre = $request->input("fgenre");
      echo"$filteredGenre";
      echo"$filteredConsole";
      echo "SELECT * FROM `games` INNER JOIN platforms ON games.console_id = platforms.console_id WHERE games.console_id = $filteredConsole AND genre = $filteredGenre";

        $games =  DB::select("SELECT * FROM `games` INNER JOIN platforms ON games.console_id = platforms.console_id WHERE games.console_id = $filteredConsole AND genre = '$filteredGenre'");

           return view ('search', compact('games'));
    }


}
