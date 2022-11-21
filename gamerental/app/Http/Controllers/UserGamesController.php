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
    public function showUserGames()
    {
        return view('userGames');
    }
}
