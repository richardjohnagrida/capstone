<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use DB;

class SignupMemberController extends Controller
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
        
        $member = new Member;
        $member->first_name = $request->input('fname');
        $member->last_name = $request->input('lname');
        $member->birthday = $request->input('dob');
        $member->email = $request->input('email');
        $member->password = $request->input('password');
        $member->contact_number = $request->input('contact');
        $member->address = $request->input('address');
        $member->status = 'pending';
        $member->user_type = 'member';
      

            $files = $request->file();
            $profile = $files['profile'];
            $filename = time() . "=" . $profile->getClientOriginalName();
            $profile->move(public_path('images_requirements'), $filename);
        $member->img_profile = $filename;

            echo public_path('images');
        // $member->save();

        // echo"$member->member_id";
        // return redirect("welcome");
    }

    public function show_signup_form(){
        return view ('signup_member');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
