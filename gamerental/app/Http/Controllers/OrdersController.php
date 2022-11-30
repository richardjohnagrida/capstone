<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use App\Models\Member;
use App\Models\Orderitem;
use App\Models\OrdersGame;
use DB;

class OrdersController extends Controller
{

    public function show(Request $request)
    {

        $offset=0;
        $limit=config("constants.options.pagination_limit");

        if($request->has("page") && is_numeric($request->get("page")) ){

            $offset = $limit * ($request->get("page")-1);
            
        }

        $name = $request->input("search");
       

        if($request->input("search") != null){
           
            $rentals = DB::select("SELECT orders_games.order_id,first_name, last_name, name, orders_games.created_at, no_weeks,no_months, due_dates, orders_games.status FROM `orders_games` INNER JOIN members ON orders_games.member_id = members.member_id INNER JOIN order_item ON orders_games.order_id = order_item.order_id INNER JOIN games ON order_item.game_id = games.game_id WHERE orders_games.order_id LIKE '%$name%' OR games.name LIKE '%$name%' OR members.first_name LIKE '%$name%' OR members.last_name LIKE '%$name%'   LIMIT $offset, $limit");
            
        }else {
            $rentals = DB::select("SELECT orders_games.order_id,first_name, last_name, name, orders_games.created_at, no_weeks,no_months, due_dates, orders_games.status FROM `orders_games` INNER JOIN members ON orders_games.member_id = members.member_id INNER JOIN order_item ON orders_games.order_id = order_item.order_id INNER JOIN games ON order_item.game_id = games.game_id LIMIT $offset, $limit");
        }


        $totalRows =  DB::select("SELECT COUNT(order_id) as totalRows FROM orders_games WHERE status =active");

        $countRows = $totalRows[0]->totalRows;
        $pages = ceil($countRows/$limit);
        $activePage=$request->get("page");

        $dues = DB::select("SELECT orders_games.order_id, first_name, img_profile FROM `orders_games` INNER JOIN members ON orders_games.member_id =members.member_id WHERE due_dates = CURRENT_DATE;");

        $pendings = DB::select("SELECT DISTINCT orders_games.order_id,first_name, last_name, name, 
        orders_games.created_at, no_weeks,no_months, due_dates, orders_games.status, members.img_profile
        FROM orders_games INNER JOIN members ON orders_games.member_id = members.member_id 
        INNER JOIN order_item ON orders_games.order_id = order_item.order_id 
        INNER JOIN games ON order_item.game_id = games.game_id WHERE orders_games.status ='pending'
        GROUP BY order_id");

        return view ('orders', compact('rentals','totalRows','pages','activePage','dues','pendings'));

    }
  

    public function update(Request $request, $id)
    {
    
        $rentals = OrdersGame::where('order_id', $id)
            ->update([
                
                'status' =>$request->input('status'),
            ]);
            return redirect("orders");

    }
 
}

