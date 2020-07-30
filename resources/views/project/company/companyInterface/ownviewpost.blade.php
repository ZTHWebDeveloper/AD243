<?php 
use App\Profile;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;
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
     $allpost=Post::where('user_id',$user_id)->paginate(3);
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
	    	@foreach($allpost as $post)
	        <div class="card border-primary mb-3 col-lg-4">
	      	
                <div id="carouselExampleIndicators" class="carousel slide" data-ridecarousel">
                
		         <div class="card-body">
	              <p>Company Name: &nbsp;&nbsp;{{$post->company_name}}</p>
	               <h5 class="card-title">{{$post->post_title}}</h5>
	              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	            </div>
	            <ol class="carousel-indicators">
	              @foreach(unserialize($post->img) as $image)
                     <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="active" class="{{$loop->first ? 'active':''}}">
                      <img src="{{asset('upload/'.$image)}}" class="d-block w-100 " height="30px; " alt="..." style="box-shadow: 2px 5px 5px 2px black;border: 1px solid black;" >
                    </li>
                   @endforeach
	            </ol>           
	            <div class="carousel-inner">
	              @foreach(unserialize($post->img) as $image)
	                <div class="carousel-item {{$loop->first ? 'active':''}}">
	                  <img src="{{asset('upload/'.$image)}}" class="d-block w-100" height="300px" alt="..." >
	                </div>
                   @endforeach
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
	        {{ $allpost->links()}}
	      </div>
          
	    </div>  
	    <!-- For All Post -->

@endsection

@section('footer')
      @include('project.layout.footer')
@endsection