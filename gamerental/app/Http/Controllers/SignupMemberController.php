<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
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
        $folder_name = config('constants.options.members_requirements_folder_name');
        
        $member = new Member;
        $member->first_name = $request->input('fname');
        $member->last_name = $request->input('lname');
        $member->birthday = $request->input('dob');
        $member->email = $request->input('email');
        $member->password = Hash::make($request->input('password'));
        $member->contact_number = $request->input('contact');
        $member->address = $request->input('address');
        $member->status = 'pending';
        $member->user_type = 'member';
        

            $files = $request->file();
            $profile = $files['profile'];
            $profile_img = time() . "_" . $profile->getClientOriginalName();
            $profile->move(public_path(config($folder_name)), $profile_img);

            $identification = $files['id'];
            $id_img = time() . "_" . $identification->getClientOriginalName();
            $identification->move(public_path(config($folder_name)), $id_img);
       
            $proof = $files['proof'];
            $proof_img = time() . "_" . $proof->getClientOriginalName();
            $proof->move(public_path(config($folder_name)), $proof_img);

            $member->img_profile = $profile_img;
            $member->img_id = $id_img;
            $member->img_requirements = $proof_img;


         
        $member->save();

       
        return redirect("welcome");
    }

    public function show_signup_form(){
        $allowed_imgs = config("constanst.options.allowed_images");

        return view ('signup_member', ["allowed_img_format"=>$allowed_imgs]);
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
