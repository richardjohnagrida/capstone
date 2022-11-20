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

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $folder_name = config('constants.options.cover_photo_for_games');
        
        $games = new Game;
        $games->name = $request->input('name');
        $games->genre = $request->input('genre');
        $games->console_id = $request->input('console');
        $games->description = $request->input('description');
        $games->total_qty = $request->input('qty');
        $games->qty_on_hand = $request->input('qty');
        $games->qty_available = $request->input('qty');
        $games->price_per_week = $request->input('week');
        $games->price_per_month = $request->input('month');
        $games->waiting_qty = 0 ;
        $games->status = 'active';
       
        $files = $request->file();
        $cover = $files['cover'];
        $cover_img = time() . "_" . $cover->getClientOriginalName();
        $cover->move(public_path(config($folder_name)), $cover_img);

        $games->cover_img = $cover_img;

        $games->save();

       
        return redirect("add_games");
    }


    public function showPlatforms(Request $request){
       
        $offset=0;
        $limit=config("constants.options.pagination_limit");

        if($request->has("page") && is_numeric($request->get("page")) ){

            $offset = $limit * ($request->get("page")-1);
            
        }
        $tittle = $request->input("search");
       

        if($request->input("search") != null){
           
            $games =  DB::select("SELECT * FROM `games` INNER JOIN platforms ON games.console_id = platforms.console_id WHERE status ='active' AND name LIKE '%$tittle%' ORDER BY games.console_id LIMIT 
            $offset, $limit");
        }else {
            $games = DB::select("SELECT * FROM `games` INNER JOIN platforms ON games.console_id = platforms.console_id WHERE status ='active' ORDER BY games.console_id LIMIT 
            $offset, $limit");
        }

        $platforms = DB::select("SELECT * FROM platforms ORDER BY console_name");

       
        
        $totalRows =  DB::select("SELECT COUNT(game_id) as totalRows FROM `games` INNER JOIN platforms ON games.console_id = platforms.console_id WHERE status ='active'");
      

        $countRows = $totalRows[0]->totalRows;
        $pages = ceil($countRows/$limit);
        $activePage=$request->get("page");


        return view ('add_games', compact('platforms','games','totalRows','pages','activePage'));
    }

    public function filter(Request $request){
        $filteredConsole = $request->input("fconsole");
        $filteredGenre = $request->input("search");
        echo $filteredConsole;

        return view ('add_games');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)

    {
       
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $games = Game::where('game_id', $id)


            ->update([
                'name' =>$request->input('name'),
                'genre' =>$request->input('genre'),
                'description' =>$request->input('description'),
                'price_per_week' =>$request->input('week'),
                'price_per_month' =>$request->input('month'),
            ]);

            return redirect("add_games");

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
