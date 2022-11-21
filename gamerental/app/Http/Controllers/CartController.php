<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart(Request $request)
    {
        return view('userCart');
    }


    public function checkout(Request $request) {
        // insert order the usual way
        // after inserting, you'll get the order. 
        // last insert id

        $itemIds = $request->get("itemIds");
        foreach ($itemIds as $gameId) {
            // call insert query
            // $order_id = last insert id, 
            // game_id = $gameId;
        }
    }
}
