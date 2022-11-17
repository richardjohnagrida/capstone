<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\Game;
use App\Models\Platform;
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

       
        return redirect("welcome");
    }

    public function showPlatforms(){
        $platforms = DB::select("SELECT * FROM platforms ORDER BY console_name");

        return view ('add_games', compact('platforms'));
    }

    public function showPlatform(){

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

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
