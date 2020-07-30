<?php 
use App\Profile;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
?>
@extends('project.layout.master')
@section('title','CompanyPostForm')
@section('navbar')
      @include('project.company.layout.navbar')
@endsection
@section('contact')

<?php  
    
    
    //single show profile
     $user_id=Auth::user()->id;
     $singleprofile=DB::table('users')
          ->join('profiles','users.id','=','profiles.id')
          ->select('users.*','profiles.*')
          ->where('profiles.id','=',$user_id)
         ->first();
   ?>
    <div class="container" style="margin-top: 180px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success" style="border-radius: 10px 10px 0px 0px"><h2 class="text-center">Video Creation</h2></div>
                <div class="card-body" style="background:#000;">
                    <form method="post" enctype="multipart/form-data">
                       
                         @foreach($errors->all() as $error)
                           <p class="alert alert-danger">{{$error}}</p>
                         @endforeach
                      
                       {{csrf_field()}}
                       <div class="form-group row">
                          <label for="occupation" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Occupation</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="occupation" name="occupation" value="{{$singleprofile->occupation}}" readonly="">
                          </div>
                        </div>
                         <div class="form-group row">
                          <label for="location" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Location</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="location" name="location" value="{{$singleprofile->location}}" readonly="">
                          </div>
                        </div>
                         <div class="form-group row">
                          <label for="profile_name" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Profile Name</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="profile_name" name="profile_name" value="{{Auth::user()->name}}" readonly="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="profile_select" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Select Profile</label>
                          <div class="col-md-6">
                                <input type="text" id="select_profile" name="select_profile" class="form-control" value="{{asset('/uploads/'.$singleprofile->profile)}}" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="company_name" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Company Name</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{Auth::user()->company_name}}" readonly="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="post_title" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Product Title</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="product_title" name="product_title">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="post_content" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Product Content</label>
                          <div class="col-md-6">
                            
                            <textarea class="form-control" name="product_content" rows="5"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right" style="color: #fff;">Select Video</label>

                            <div class="col-md-6">
                                <span class="fa fa-camera" style="font-size: 30px;"></span>
                                <input id="file" type="file" class="form-control" name="file">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-success">
                                    Video Upload
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
      @include('project.layout.footer')
@endsection