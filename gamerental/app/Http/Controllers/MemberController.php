<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Member;
use App\Models\Orderitem;
use App\Models\Ordersgames;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $offset=0;
        $limit=config("constants.options.pagination_limit");

        if($request->has("page") && is_numeric($request->get("page")) ){

            $offset = $limit * ($request->get("page")-1);
            
        }

        $name = $request->input("search");
       

        if($request->input("search") != null){
           
            $members =  DB::select("SELECT * FROM `members` WHERE status ='active' AND first_name LIKE '%$name%' OR last_name LIKE '%$name%' ORDER BY last_name LIMIT 
            $offset, $limit");
        }else {
            $members = DB::select("SELECT * FROM `members` WHERE status ='active' ORDER BY last_name LIMIT 
            $offset, $limit");
        }

        $totalRows =  DB::select("SELECT COUNT(member_id) as totalRows FROM `members` WHERE status ='active'");

        $countRows = $totalRows[0]->totalRows;
        $pages = ceil($countRows/$limit);
        $activePage=$request->get("page");

        $pendings =  DB::select("SELECT * FROM `members` WHERE status ='pending'");


        return view ('members', compact('members','totalRows','pages','activePage', 'pendings'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $status =$request->input('status');
          if($status != null){
        $members = Member::where('member_id', $id)
            ->update([
                'email' =>$request->input('email'),
                'contact_number' =>$request->input('contact'),
                'address' =>$request->input('address'),
                'status' =>$request->input('status'),
                
            ]);
        }

        else{
            $members = Member::where('member_id', $id)
            ->update([
          
                'status' =>'active',
                
            ]);
        }
            return redirect("members");

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
