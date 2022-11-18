<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Member;
use App\Models\Orderitem;
use App\Models\Ordersgames;
use DB;

class DashboardController extends Controller
{
    public function show()
    {
        $rentals = DB::select("SELECT orders_games.order_id,first_name, last_name, name, orders_games.created_at, no_weeks,no_months, due_dates FROM `orders_games` INNER JOIN members ON orders_games.member_id = members.member_id INNER JOIN order_item ON orders_games.order_id = order_item.order_id INNER JOIN games ON order_item.game_id = games.game_id");

        $profits = DB::select("SELECT SUM(total_amount) as total_amount, CURRENT_DATE FROM orders_games");

        return view("dashboard", compact("rentals", "profits"));
  
    }


}

