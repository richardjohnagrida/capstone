<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use App\Models\Member;
use App\Models\Orderitem;
use App\Models\Ordersgame;
use DB;
use Session;


class CartController extends Controller
{
    public function showCart(Request $request)
    {
        return view('userCart');
    }


    public function checkout(Request $request) {
     
        $id = Session::get('member_id');

        $week = $request->input('number_of_weeks') * 7;

        $date = date("Y-m-d");
        $date = strtotime($date);
        $date = strtotime("+$week day", $date);
        $date = date('Y-m-d', $date);
    
        $orders = new OrdersGame;
        $orders->member_id = $id;
        $orders->no_weeks = $request->input('number_of_weeks');
        $orders->total_amount = $request->input('total_amount');
        $orders->due_dates = $date;
        $orders->status = 'pending';

        $orders->save();

        $itemIds = $request->get("itemIds");

        $lastOrder = DB::select("SELECT LAST_INSERT_ID(order_id) as lastOrder FROM orders_games ORDER BY order_id DESC LIMIT 1");

        $order = $lastOrder[0]->lastOrder;

        foreach ($itemIds as $gameId) {

            $item = new OrderItem;
            $item->order_id = $order;
            $item->member_id = $id;
            $item->game_id = $gameId;
            $item->save();

            return redirect('/profile');
            
        }
    }
}


