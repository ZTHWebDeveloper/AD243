<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideoFormRequest;
use App\Video;
use App\User;
use Illuminate\Support\Facades\Auth;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
         return view('project.company.companyInterface.video');
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
    public function store(VideoFormRequest $request)
    {
            $user_id=Auth::user()->id;
            //Single video upload file
            $file=$request->file('file');
            $maxsize =5242880;
            $filename=$file->getClientOriginalName();
            
            $videoFileType=strtolower(pathinfo( $filename,PATHINFO_EXTENSION));
            // print_r($videoFileType);
            // exit();
            $extensions_arr=array("mp4","avi","3gp","mov","mpeg");
            if (in_array($videoFileType,  $extensions_arr)) {

                if (($file->getClientSize() >= $maxsize)|| ($file->getClientSize() == 0)) {
                    echo "File too large .File must be less than 5MB.";
                 }else{
                        if ($file->move(public_path().'/uploads/',$filename)) {
                             Video::create([
                                
                                'user_id'=>$user_id,
                                'company_name'=>$request->get('company_name'),
                                'product_title'=>$request->get('product_title'),
                                'product_content'=>$request->get('product_content'),
                                'occupation'=>$request->get('occupation'),
                                'location'=>$request->get('location'),
                                'profile_name'=>$request->get('profile_name'),
                                'profile'=>$request->get('select_profile'),
                                'video'=>$filename
                            ]);
                          return redirect('/companyshow');
                        }  
                          
                }
            }
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
