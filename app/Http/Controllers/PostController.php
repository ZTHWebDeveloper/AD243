<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PostFormRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
          return view('project.company.companyInterface.post');
        }else{
            return redirect('/');
        }
        
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
    public function store(PostFormRequest $request)
    { 
       $user_id=Auth::user()->id;
        // $files=$request->file('file');
        // $fileArry=array();
        // if (!empty($files)) {
        //    foreach ($files as $file) {
        //           $filename=uniqid().'_'.$file->getClientOriginalName();
        //           array_push($fileArry, $filename);
        //           $file->move(public_path().'/upload/',$filename);
              
        //    }
           
        // }
        $files=[];
        if ($request->file('file1')) {
            $files[]=$request->file('file1');
        }
         if ($request->file('file2')) {
            $files[]=$request->file('file2');
        }
         if ($request->file('file3')) {
            $files[]=$request->file('file3');
        }
       
        foreach ($files as $file) {
            if (!empty($file)) {
                $filename=uniqid().'_'.$file->getClientOriginalName();
                $file->move(public_path().'/upload/',$filename);
                $data[]=$filename;
            }
        }
        Post::create([
            'user_id'=>$user_id,
           'company_name'=>$request->get('company_name'),
           'post_title'=>$request->get('post_title'),
           'post_content'=>$request->get('post_content'),
           'occupation'=>$request->get('occupation'),
           'location'=>$request->get('location'),
           'profile_name'=>$request->get('profile_name'),
           'profile'=>$request->get('select_profile'),
           'img'=>serialize($data),
        ]);
       return redirect('/companyshow');
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
