<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use App\Http\Requests\ProfileFormRequest;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('project.Profile.profile');
        $profiles=Profile::find($id);
        return view('project.company.companyInterface.post',compact('profiles'));
    }
    public function store(ProfileFormRequest $request,$id)
    {   
        $user_id=Auth()->user()->id;
        $file =$request->file('file');
        $filename =uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/', $filename);
        $profile=Profile::find($id);
        $profile->update([
            'occupation'=>$request->get('occupation'),
            'location'=>$request->get('location'),
            'user_id'=>$user_id,
            'profile'=>$filename
        ]);
        return redirect(action('ProfileController@store',$id))->with('success','Successfully Profile Change');
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
