<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PackageFormRequest;
use App\ImageVideoPackage;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use Illuminate\Support\Facades\DB;
class PackageController extends Controller
{
 
    public function index()
    { 
      if(Auth::check()){
        return view('project.company.companyInterface.package');
      }else{
        return redirect('/');
      }
        
    }
    
     public function store(PackageFormRequest $request)
    {
        //Package Insert 
       $user_id =Auth::user()->id;
       $ImageVideoPackage = new ImageVideoPackage;
       if($request->post=='30000'){
          $ImageVideoPackage->user_id=$user_id;
          $ImageVideoPackage->number_post=$request->get('post_number');
          $ImageVideoPackage->status=1;
          $ImageVideoPackage->total_amount=$request->get('total');
          $ImageVideoPackage->code=$request->get('code');
       }else if($request->post=='45000'){
          $ImageVideoPackage->user_id=$user_id;
          $ImageVideoPackage->number_post=$request->get('post_number');
          $ImageVideoPackage->status=0;
          $ImageVideoPackage->total_amount=$request->get('total');
          $ImageVideoPackage->code=$request->get('code');
       }
       $ImageVideoPackage->save();

        //Package selsect
        $postpackages=ImageVideoPackage::orderBy('id','desc')->where('status',1)->where('user_id',$user_id)->get();
        $videopackages=ImageVideoPackage::orderBy('id','desc')->where('status',0)->where('user_id',$user_id)->get();

        return view('project.company.companyInterface.package_list',compact('postpackages','videopackages'));
     
    }

    public function showlist(){
        $id=Auth::user()->id;
        $postpackages=ImageVideoPackage::orderBy('id','desc')->where('status',1)->where('user_id',$id)->get();
        $videopackages=ImageVideoPackage::orderBy('id','desc')->where('status',0)->where('user_id',$id)->get();

        return view('project.company.companyInterface.package_list',compact('postpackages','videopackages'));
    }
   
    public function create()
    {
        //
    }

   
    public function show($id)
    {
        return view('project.company.companyInterface.verifypackage');

    }
    
    public function confirm(Request $request,$id){
     $user_id =Auth::user()->id;
     $verify_code=$request->get('verify_code');
     $code=ImageVideoPackage::whereId($id)->firstOrFail();
     if($code->code==$verify_code){
        $code->delete();
        return redirect(action('PostController@index',$id));
     }else{
        return redirect(action('PackageController@show',$id))->with('success','Invalid Code,Please Try Again!!');
     }

    }
    
    //Package History
    public function history(){
        $id=Auth::user()->id;
        $postpackages=ImageVideoPackage::orderBy('id','desc')->onlyTrashed()->where('status',1)->where('user_id',$id)->get();
        $videopackages=ImageVideoPackage::orderBy('id','desc')->onlyTrashed()->where('status',0)->where('user_id',$id)->get();

        return view('project.company.companyInterface.package_history',compact('postpackages','videopackages'));
    }

    

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
