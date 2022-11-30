<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Member;
use App\Models\Orderitem;
use App\Models\Ordersgames;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show()
    {
        $rentals = DB::select("SELECT orders_games.order_id,first_name, last_name, name, orders_games.created_at, no_weeks,no_months, due_dates FROM orders_games INNER JOIN members ON orders_games.member_id = members.member_id INNER JOIN order_item ON orders_games.order_id = order_item.order_id INNER JOIN games ON order_item.game_id = games.game_id ORDER BY order_id DESC LIMIT 8" );

        $profits = DB::select("SELECT SUM(total_amount) as total_amount FROM orders_games WHERE DATE(created_at) = CURRENT_DATE");

        $dues = DB::select("SELECT orders_games.order_id, first_name, img_profile FROM orders_games INNER JOIN members ON orders_games.member_id =members.member_id WHERE due_dates = CURRENT_DATE;");

        $months =  DB::select("SELECT SUM(total_amount) as months FROM orders_games");

        $rents = DB::select("SELECT COUNT(order_item.order_id) as rents FROM order_item INNER JOIN orders_games ON orders_games.order_id = order_item.order_id WHERE DATE(created_at)=CURRENT_DATE");

        $monthlyRents = DB::select("SELECT COUNT(order_id) as mrents FROM order_item");

        return view("dashboard", compact("rentals", "profits", "dues", "months", "rents", "monthlyRents"));
  
    }


}

