<?php 
use App\Profile;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Video;
?>
@extends('project.layout.master')
@section('title','CompanyUI')
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

    //All Post
     $allvideo=Video::where('user_id',$user_id)->paginate(3);
   ?>
  
	<div class="container"  style="margin-top: 180px;">
		<!-- For Profile -->
		<div class="card">
		   <div class="card-header">
		     <button class="btn btn-outline"> 
		        <a href="{{url('ownpost')}}" class="card-title"><strong>All Posts</strong></a>
		     </button>
		     <button class="btn btn-outline"> 
		        <a href="{{url('ownvideo')}}" class="card-title"><strong>All Videos</strong></a>
		     </button>
           </div>
		   <div class="card-body col-md-12">
			   	<img class="img img-125 rounded-circle mx-auto d-block w-30" height="120px;" src="{{asset('/uploads/'.$singleprofile->profile)}}" alt="" style="border: 1px solid gray;">
			    <h5 class="text-center m-t-15 m-b-15">{{$singleprofile->name}}</h5>
		        <div class="location text-center">
		            <i class="zmdi zmdi-star"></i>
		            {{$singleprofile->occupation}}
		        </div>
		        <div class="location text-center">
		        <i class="zmdi zmdi-city"></i>
		           {{$singleprofile->location}}
		        </div>
		   </div>
	   </div>
	</div>   
	   <!--  For Profile -->

	   <!-- For All Post -->
	    <div class="container" style="margin-top: 20px;">
           <div class="row">
	    	@foreach($allvideo as $video)
	        <div class="card border-primary mb-3 col-lg-4">
	      	
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                
		         <div class="card-body">
	              <p>Company Name: &nbsp;&nbsp;{{$video->company_name}}</p>
	               <h5 class="card-title">{{$video->product_title}}</h5>
	              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	            </div>        
	            <div class="carousel-inner">
	              <div class="carousel-item active">
		                <video controls="" class="w-100" height="200" >
	                    <source src="{{asset('/uploads/'.$video->video)}}" type="video/mp4">
	                  </video>
	              </div>
	          
	            </div>
	            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	              <span class="sr-only">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	              <span class="carousel-control-next-icon" aria-hidden="true"></span>
	              <span class="sr-only">Next</span>
	            </a>

	          </div>
	          <div class="card-footer">
	              <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-thumbs-o-up"></span></button>&nbsp;&nbsp;&nbsp;&nbsp;
	              <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-commenting"></span></button>&nbsp;&nbsp;&nbsp;&nbsp;
	              <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-external-link"></span></button>

	          </div>
	          <div style="border:1px solid gray;border-radius:10px;padding: 5px;background: #ddd;padding-left: 30px;">
	            <span style="font-weight: bold;color:black;">Like(1000)</span><br>
	            <span style="font-weight: bold;color:black;">comments(1000)</span>
	          </div>
	            
	        </div>
	        @endforeach
	        </div>
	        {{ $allvideo->links()}}
	      </div>
          
	    </div>  
	    <!-- For All Post -->


@endsection

@section('footer')
      @include('project.layout.footer')
@endsection